<?php

namespace App;

use App\Mail\MessageDeleted;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class Film extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'duration', 'description', 'year', 'url', 'image', 'imagesec', 'starts',
    ];

    // TODO: Relaciones muchos a muchos
    public function states()
    {
        return $this->belongsToMany('App\State', 'film_states')->withPivot('film_id');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category', 'category_films')->withPivot('category_id');
    }

    public function rentals()
    {
        return $this->belongsToMany('App\Rental', 'rental_films')->withPivot('rental_id');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    protected $dates = ['deleted_at'];
}
