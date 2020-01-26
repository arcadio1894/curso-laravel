<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name', 'description',
    ];

    // TODO: Relaciones muchos a muchos
    public function films() {
        return $this->belongsToMany('App\film', 'category_films')->withPivot('film_id');
    }

    protected $dates = ['delete_at'];
}
