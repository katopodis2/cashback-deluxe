<?php


namespace App\Services;


use App\Models\CashBackReview;
use App\Validators\CashBackReviewValidator;

class cashBackReviewService extends BaseService
{

    /**
     * cashBackReviewService constructor.
     * @param CashBackReviewValidator $reviewValidator
     */
    public function __construct(CashBackReviewValidator $reviewValidator)
    {
        $this->baseValidator = $reviewValidator;
    }

    /**
     * @return CashBackReview[]|\Illuminate\Database\Eloquent\Builder[]|\Illuminate\Database\Eloquent\Collection
     */
    public function cashBackReview()
    {
        return CashBackReview::with('user:id,name')->paginate(15,[
                'id',
                'user_id',
                'overall_assessment',
                'comment',
                'created_at',
            ]);
    }

    /**
     * @param $data
     * @return bool
     */
    public function storeCashBackReview($data)
    {
        $data['user_id'] = auth()->id();

        if (!$this->validate($this->baseValidator, $data)) {
            return false;
        }

        return CashBackReview::create($data);
    }

}
