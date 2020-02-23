<?php

namespace App\Mail;

use App\Category;
use App\Film;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class RentalConfirmed extends Mailable
{
    use Queueable, SerializesModels;
    
    public $email;
    public $username;
    public $idRental;

    public function __construct( $idRental ,$email, $username )
    {
        $this->email = $email;
        $this->username = $username;
        $this->idRental = $idRental;
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
        $idRental = $this->idRental;
        
        return $this->view('mails.rentalConfirmed')->with(compact('idRental', 'email', 'username'));
    }
}
