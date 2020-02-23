<?php

namespace App\Listeners;

use App\Events\RentalConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;


class rentalConfirmedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function handle(RentalConfirmed $event)
    {
        $email = Auth::user()->email;
        $username = Auth::user()->name;
        $idRental = $event->rental->id;
        
        Mail::to('mailpruebacursophp@gmail.com')
            ->send( new \App\Mail\RentalConfirmed($idRental, $email, $username) );
    }
}
