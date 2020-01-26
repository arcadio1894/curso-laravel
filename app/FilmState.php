<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FilmState extends Model
{
    protected $fillable = [
        'film_id', 'state_id', 
    ];
}
