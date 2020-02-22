<?php

namespace App\Listeners;

use App\Mail\MessageRegistration;
use Illuminate\Auth\Events\Registered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class sendEmailNotification
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

    /**
     * Handle the event.
     *
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        // Obtenemos los datos del usuario
        $email = $event->user->email;
        $name = $event->user->username;
        
        // Enviar el correo electrónico
        Mail::to($email)
            ->send( new MessageRegistration( $email, $name) );
    }
}
