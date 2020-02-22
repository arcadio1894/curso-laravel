<?php

namespace App\Listeners;

use App\Events\CategoryDeleted;
use App\Mail\MessageDeleted;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CategoryDeletedListener
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
     * @param  CategoryDeleted  $event
     * @return void
     */
    public function handle(CategoryDeleted $event)
    {
        $email = Auth::user()->email;
        $username = Auth::user()->name;
        $category = $event->category->name;
        Mail::to('mailpruebacursophp@gmail.com')
            ->send( new MessageDeleted($category, $email, $username) );
    }
}
