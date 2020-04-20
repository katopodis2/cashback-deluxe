<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class StoreComment extends Model
{
    protected $fillable = [
        'store_id','user_id','comment','advantages','disadvantages','order_number'
    ];
}
