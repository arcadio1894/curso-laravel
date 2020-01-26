<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryFilm extends Model
{
    protected $fillable = [
        'category_id', 'film_id',
    ];
}
