<?php

namespace App\Mail;

use App\Category;
use App\Film;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MessageDeleted extends Mailable
{
    use Queueable, SerializesModels;
    
    public $email;
    public $username;
    public $category;

    public function __construct( $category ,$email, $username )
    {
        $this->email = $email;
        $this->username = $username;
        $this->category = $category;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->email;
        $username = $this->username;
        $category = $this->category;
        return $this->view('mails.messageDeleted')->with(compact('category', 'email', 'username'));
    }
}
