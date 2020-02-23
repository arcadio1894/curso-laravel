<?php

namespace App\Events;

use App\Rental;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class RentalConfirmed
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $rental;

    public function __construct( Rental $rental )
    {
        $this->rental = $rental;
    }
}