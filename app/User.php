<?php

namespace App;

use App\Mail\MessageDeleted;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Mail;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role_id', 'avatar'
    ];

    protected $with = ['rentals'];

    public function role() {
        return $this->belongsTo('App\Role');
    }

    public function rentals() {
        return $this->hasMany('App\Rental');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $dates = [
        'deleted_at'
    ];

    
}
