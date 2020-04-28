<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreCategory extends Model
{
    protected $fillable = [
        'user_id','store_id','category_id'
    ];
    public function percent()
    {
        return $this->belongsTo(StoreCategory::class , 'category_percent_id' , 'id');
    }



}
