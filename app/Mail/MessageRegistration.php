<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageRegistration extends Mailable
{
    use Queueable, SerializesModels;
    
    public $email;
    public $username;

    public function __construct( $email, $username )
    {
        $this->email = $email;
        $this->username = $username;
    }

    public function build()
    {
        $email = $this->email;
        $username = $this->username;
        return $this->view('mails.messageRegistration')->with(compact('email', 'username'));
    }
}
