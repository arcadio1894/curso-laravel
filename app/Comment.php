<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'message', 'film_id', 'user_id', 'user', 'photo',
    ];
    
    public function user() {
        return $this->belongsTo('App\User');
    }

    public function film() {
        return $this->belongsTo('App\Film');
    }
}
