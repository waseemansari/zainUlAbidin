<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class EnquiryVendor extends Model
{
  protected $fillable= ['ListModel_id','name','phone','email','weddingDate','guestNumber_id','sendQueryVia','user_id','status'];

}
