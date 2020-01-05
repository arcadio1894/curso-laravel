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

    // TODO: Creacion de relaciones
    public function films()
    {
        return $this->hasMany('App\Film');
    }

    protected $dates = ['delete_at'];
}
