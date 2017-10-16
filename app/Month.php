<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Month extends Model
{
    public function days()
    {
      return $this->hasMany('App\Day');
    }
    public function users()
    {
      return $this->beLongsToMany('App\User','user_day');
    }
}
