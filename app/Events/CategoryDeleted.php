<?php

namespace App\Events;

use App\Category;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class CategoryDeleted
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    
    public $category;
    
    public function __construct( Category $category )
    {
        $this->category = $category;
    }
}
