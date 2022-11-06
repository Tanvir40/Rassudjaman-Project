<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
    protected $fillable=['lecture_key','lecture_title_en','lecture_title_bn','lecture_details_part_en','lecture_details_part_bn'];
}