<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'name', 'duration', 'description', 'year', 'url', 'category_id',
    ];
    
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
