<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class imageList extends Model
{
    protected $fillable = [
        'image', 'ListModel_id',
    ];
    public function List(){
    	return $this->belongsTo('App\models\ListModel');
    }
    public function wishList(){
    	return $this->belongsTo('App\models\wishList','ListModel_id','ListModel_id');
    }
}
