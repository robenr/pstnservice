<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactUs extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mailData)
    {
        $this->mailData = $mailData;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $user = array(
                      'first_name' => $this->mailData['first_name'],
                      'last_name' => $this->mailData['last_name'],
                      'email' => $this->mailData['email'],
                      'phone' => $this->mailData['phone'],
                      'city' => $this->mailData['city'],
                      'country' => $this->mailData['country'],
                      'state' => $this->mailData['state'],
                      'query' => $this->mailData['query'],
                  );
        return $this->view('emails.contactus')
                    ->with([
                        'user' => $user,
                    ]);
    }
}
