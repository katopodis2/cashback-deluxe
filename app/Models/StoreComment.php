<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreComment extends Model
{
    /**
     * @var array
     */
    protected $fillable = [
        'store_id',
        'user_id',
        'comment',
        'advantages',
        'disadvantages',
        'order_number',
        'updated_at',
        'created_at',
    ];
}
