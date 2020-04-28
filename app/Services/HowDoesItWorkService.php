<?php


namespace App\Services;


use App\Models\HowDoesItWork;

class HowDoesItWorkService extends BaseService
{

    /**
     * @return HowDoesItWork[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getHowWorks()
    {
        return HowDoesItWork::all(['title', "text", "img"]);
    }
}
