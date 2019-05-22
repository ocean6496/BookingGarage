<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class VerifyCustomer extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {  
        $user_id = $this->user['user_id'];
        $remember_token = $this->user['remember_token'];
        $domain = 'http://127.0.0.1:8000/verify?access_token='.$remember_token.'&id='.$user_id;

        return $this->subject('Notification Student Submit Exam')->view('mail.verifyCustomer', compact('domain'));
    }
}
