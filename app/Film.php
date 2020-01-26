<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

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

    protected $dates = ['deleted_at'];
}
