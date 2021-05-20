<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Order
     */
    public $full_name, $address, $phone, $email, $subject, $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($full_name, $address, $phone, $email, $subject, $content)
    {
        $this->full_name = $full_name;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
        $this->subject = $subject;
        $this->content = $content;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.contact');
    }
}
