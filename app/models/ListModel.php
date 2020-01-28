<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ListModel extends Model
{
    protected $fillable = [
        'heading', 'address', 'country','city','category','seat','price_id','latitude','longitude','user_id','status','description','image',
    ];
    public function User(){
        return $this->belongsTo('App\User');
    }
    public function imageList(){
    	return $this->hasOne('App\models\imageList','ListModel_id');
    }
    public function imageListMany(){
        return $this->hasMany('App\models\imageList','ListModel_id');
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
    

}
