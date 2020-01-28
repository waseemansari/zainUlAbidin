<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
         protected $fillable= ['name','user_id','rating','description','status','ListModel_id'];

}
