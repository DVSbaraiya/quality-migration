<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class contactcontroller extends Controller
{
    public function contact()
    {
        return view('pages.contact');
    }

public function sendMail(Request $request)
{
    // 1. Basic form validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'number' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
        'g-recaptcha-response' => 'required',
        'website' => 'nullable|string', // Honeypot
        'form_timer' => 'required|integer',
    ]);

    // 2. Honeypot protection - if bot fills this, silently stop
    if (!empty($request->website)) {
        return back()->with('success', 'Your message has been sent!');
    }

    // 3. Timing protection (bots submit instantly)
    if (time() - $request->form_timer < 3) { 
        return back()->with('error', 'Please take a moment before submitting.');
    }

    // 4. reCAPTCHA verification
    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
        'secret'   => env('RECAPTCHA_SECRET_KEY'),
        'response' => $request->input('g-recaptcha-response'),
        'remoteip' => $request->ip(),
    ]);

    $result = $response->json();

    if (!($result['success'] ?? false)) {
        return back()->with('error', 'Captcha verification failed. Please try again.');
    }

    // 5. Email Data
    $emailData = [
        'name'      => $validated['name'],
        'number'    => $validated['number'],
        'email'     => $validated['email'],
        'message'   => $validated['message'],
        'page_url'  => $request->headers->get('referer'),
    ];

    // 6. Send Emails
    try {
        // Admin email
        Mail::send('mail.contact', ['contact' => $emailData], function ($message) {
            $message->to('admin@qualitymigration.com', 'Quality Migration Admin')
                    ->subject('New Contact Form Submission');
        });

        // Auto reply to user
        Mail::send('mail.autoreply', ['contact' => $emailData], function ($message) use ($emailData) {
            $message->to($emailData['email'], $emailData['name'])
                    ->subject('Thank you for contacting Quality Migration');
        });

    } catch (\Exception $e) {
        Log::error("Email sending failed", ['error' => $e->getMessage()]);
        return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
    }

    return redirect()->back()->with('success', 'Your message has been sent!');
}

}
