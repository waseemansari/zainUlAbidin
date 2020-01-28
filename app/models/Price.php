<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    public function List(){
    	return $this->hasOne('App\models\ListModel');
    }
    public function Budget(){
    	return $this->hasOne('App\models\Budget');
    }
    
}
