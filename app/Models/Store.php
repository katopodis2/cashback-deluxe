<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $fillable = [
        'name','img','percent_id','description','popularity'
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class , 'store_categories' , 'store_id' , 'category_id');
    }
    public function comments()
    {
        return $this->hasMany(StoreComment::class, 'store_id', 'id');
    }


}
