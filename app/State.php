<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class State extends Model
{
    use SoftDeletes;

    protected $fillable = ['name'];

    // TODO: Relaciones muchos a muchos
    public function films() {
        return $this->belongsToMany('App\film', 'film_states')->withPivot('state_id');
    }

    protected $dates = ['deleted_at'];
}
