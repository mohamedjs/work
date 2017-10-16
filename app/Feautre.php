<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feautre extends Model
{
  public function users()
  {
    return $this->belongsTo('App\users','user_id');
  }
}
