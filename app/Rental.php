<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{
    protected $fillable = [
        'user_id', 'rental_date', 'active',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }

    // TODO: Relaciones muchos a muchos
    public function films() {
        return $this->belongsToMany('App\Film', 'rental_films')->withPivot('film_id');
    }
}
