<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
     public function List(){
    	return $this->hasOne('App\models\ListModel');
    }
}
