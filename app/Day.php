<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function months()
    {
      return $this->belongsTo('App\Month','month_id');
    }
    public function users()
    {
      return $this->beLongsToMany('App\User','user_day');
    }
}
