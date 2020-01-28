<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class GuestInvite extends Model
{
     protected $fillable= ['name','email','phone','address','invite','user_id'];
}
