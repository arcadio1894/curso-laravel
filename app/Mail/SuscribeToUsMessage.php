<?php

namespace App\Mail;

use App\Category;
use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use phpDocumentor\Reflection\Types\Integer;

class SuscribeToUsMessage extends Mailable
{
    use Queueable, SerializesModels;

    public $categories;
    public $email;

    public function __construct( Collection $categories, $email )
    {
        $this->categories = $categories;
        $this->email = $email;
    }

    public function build()
    {
        $categories = $this->categories;
        $email = $this->email;
        return $this->view('mails.suscribeToUsMessage')->with(compact('categories', 'email'));
    }
}
