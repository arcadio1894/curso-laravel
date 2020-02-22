<?php

namespace App\Listeners;

use App\Events\RentalConfirmed;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

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

    /**
     * Handle the event.
     *
     * @param  RentalConfirmed  $event
     * @return void
     */
    public function handle(RentalConfirmed $event)
    {
        //
    }
}
