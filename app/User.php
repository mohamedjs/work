<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','vacancy',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function days()
    {
      return $this->beLongsToMany('App\Day','user_day');
    }
    public function months()
    {
      return $this->beLongsToMany('App\Month','user_day');
    }
    public function feautres()
    {
      return $this->hasMany('App\Feautre');
    }
}
