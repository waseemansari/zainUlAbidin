<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class wishList extends Model
{
   
     protected $fillable = [
        'user_id', 'ListModel_id','heading','address','country','city','category','description','seat','price_id','latitude','longitude','status'
    ];
    public function imageList(){
    	return $this->hasOne('App\models\imageList','ListModel_id','ListModel_id');
    }
    
    public function price(){
        return $this->belongsTo('App\models\Price','price_id');
    }
    public function category(){
    	return $this->belongsTo('App\models\Category','category');
    }
    public function Seat(){
    	return $this->belongsTo('App\models\Seat','seat');
    }
    public function Country(){
    	return $this->belongsTo('App\models\Country','country');
    }
    public function City(){
        return $this->belongsTo('App\models\City');
    }
}
