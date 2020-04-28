<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgainBuy extends Model
{
    protected $fillable = [
        'user_id','store_id', 'yes','no'
    ];
}
