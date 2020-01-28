<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Budget extends Model
{
    protected $fillable = [
       'budget', 'estimatedCost', 'actualCost','paidCost','description','currency','user_id'
    ];
    public function price(){
         return $this->belongsTo('App\models\Price','currency')->select(['id','sign']);
    }

}
