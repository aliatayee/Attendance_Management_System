<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class TestMail extends Mailable
{
    use Queueable, SerializesModels;

   public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Mailtrap Test Email from Laravel',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.test', // Reference the blade file we create next
            with: [
                'messageBody' => 'This is a test message to confirm Mailtrap configuration.',
            ],
        );
    }
    public function build()
    {
        return $this->view('emails.test')
                    ->with([
                        'messageBody' => 'This is a test message to confirm Mailtrap configuration.',
                    ]);
    }
}
