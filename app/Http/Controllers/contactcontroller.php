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
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
            'g-recaptcha-response' => 'required',
        ]);


        $emailData = [
            'name'   => $validated['name'],
            'number' => $validated['number'],
            'email'  => $validated['email'],
            'message'=> $validated['message'],
            'page_url' => $request->headers->get('referer'),
        ];

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret'   => '6LceNCYsAAAAAN3LiGz-6Kvygff_nCzDtsKUBIEO',
            'response' => $request->input('g-recaptcha-response'),
        ]);

        $result = $response->json();

        if (!($result['success'] ?? false)) {
            return back()->with('error', 'Captcha verification failed. Please try again.');
        }


        try {
            return
            Mail::send('mail.contact', ['contact' => $emailData], function ($message) {
                $message->to('admin@qualitymigration.com', 'Quality Migration Admin')
                        ->subject('New Contact Form Submission');
            });

            Log::info("Admin email sent successfully", ['email' => 'admin@qualitymigration.com']);

            Mail::send('mail.autoreply', ['contact' => $emailData], function ($message) use ($emailData) {
                $message->to($emailData['email'], $emailData['name'])
                        ->subject('Thank you for contacting Quality Migration');
            });

            Log::info("Auto-reply email sent successfully", ['email' => $emailData['email']]);

        } catch (\Exception $e) {
            Log::error("Email sending failed", ['error' => $e->getMessage()]);
            return redirect()->back()->with('error', 'Something went wrong! Please try again later.');
        }

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
