<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
     public function List(){
    	return $this->hasOne('App\models\ListModel');
    }
}
