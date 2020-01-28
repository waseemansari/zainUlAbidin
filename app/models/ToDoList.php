<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $fillable= ['name','description','date','user_id','status'];
}
