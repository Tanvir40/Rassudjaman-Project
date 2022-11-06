<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
      protected $fillable=['fullname','telephone','email','message'];
}
