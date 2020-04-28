<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
        'store_id','user_id','overall','delivery_speed','support_quality','product_description_compliance'
    ];
}
