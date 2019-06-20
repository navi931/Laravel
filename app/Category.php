<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function cars()
    {
      return $this->hasMany('\App\Car');
    }
    public function locations()
    {
      return $this->belongsToMany('\App\Location');
    }
}
