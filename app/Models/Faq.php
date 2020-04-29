<?php


namespace App\Models;


class Faq extends BaseModel
{

    protected $table="faq";
    /**
     * @var array
     */
    protected $fillable = [
        'question', 'answer', 'is_important'
    ];
}
