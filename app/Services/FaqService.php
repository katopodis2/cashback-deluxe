<?php


namespace App\Services;


use App\Models\Faq;

class FaqService extends BaseService
{
    /**
     * @return mixed
     */
    public function getImportantFaq()
    {
        return Faq::where("is_important", \ConstBoolean::YES)->get(['question','answer']);
    }

    /**
     * @return mixed
     */
    public function getAllFaqButNotImportant()
    {
        return Faq::where("is_important", \ConstBoolean::NO)->get(['question','answer']);
    }
}
