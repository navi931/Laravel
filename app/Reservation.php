<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['name','category_id','init_date','final_date','init_place','final_place'];
    public $timestamps = false;
}