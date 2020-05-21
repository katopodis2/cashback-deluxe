<?php


namespace App\Models;


class CashBackReview extends BaseModel
{
    /**
     * @var array
     */
    protected $fillable  = [
        'user_id',
        'overall_assessment',
        'comment',
        'created_at',
        'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
