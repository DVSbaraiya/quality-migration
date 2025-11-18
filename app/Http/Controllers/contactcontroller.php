<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMail;
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
        ]);
        $emailData = [
            'name' => $validated['name'],
            'number' => $validated['number'],
            'email' => $validated['email'],
            'message' => $validated['message'],
        ];
        
        if ($emailData) {
            Mail::send('mail.contact', ['contact' => $emailData], function ($message) {
                $message->to('dhameliyak1@gmail.com', 'Contact Form')->subject('Form Submission');
            });
        }

        return redirect()->back()->with('success', 'Your message has been sent!');
    }
}
