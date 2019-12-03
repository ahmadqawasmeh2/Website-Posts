<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{

    public $table="posts";


    public function user()
    {
      return $this->belongsTo('App\User');
    }
}
