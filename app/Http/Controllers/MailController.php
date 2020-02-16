<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mail\SuscribeToUsMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail( Request $request ){
        $categories = Category::get();
        Mail::to('mailpruebacursophp@gmail.com')
            ->send( new SuscribeToUsMessage( $categories, $request->get('email') ) );
        return view('welcome');
    }
}
