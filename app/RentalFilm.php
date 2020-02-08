<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalFilm extends Model
{
    protected $fillable = [
        'rental_id', 'film_id', 'price',
    ];

}
