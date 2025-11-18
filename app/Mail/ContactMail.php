<?php


namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Address;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')), // your Gmail
            replyTo: [
                new Address($this->data['email'], $this->data['name']), 
            ],
            subject: 'Contact Mail'
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.contact',
            with: [
                'name' => 'Contact Us',
                'data' => $this->data,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }

}