<?php

namespace App;

use App\Events\CategoryDeleted;
use App\Mail\MessageDeleted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description',
    ];

    // TODO: Relaciones muchos a muchos
    public function films() {
        return $this->belongsToMany('App\Film', 'category_films')->withPivot('film_id');
    }

    protected $dates = ['delete_at'];

    /*protected static function boot()
    {
        parent::boot();
        Category::deleted(function ($category) {
            $email = Auth::user()->email;
            $username = Auth::user()->name;
            Mail::to('mailpruebacursophp@gmail.com')
                ->send( new MessageDeleted($category, $email, $username) );
        });
    }*/

    // TODO: Segunda forma de activar un evento de un modelo
    protected $dispatchesEvents = [
        'deleted' => CategoryDeleted::class,
    ];
}
