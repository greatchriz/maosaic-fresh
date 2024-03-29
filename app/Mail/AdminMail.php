<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\User;

class AdminMail extends Mailable
{
    use Queueable, SerializesModels;


    public $user;
    public $adminmailcontent;

    public function __construct(User $user, $adminmailcontent)
    {
        $this->adminmailcontent = $adminmailcontent;
        $this->user = $user;
    }


    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'emails.admins.custom',

        );
    }



    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {

        return new Envelope(
            subject: 'You Requested a Withdrawal',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
