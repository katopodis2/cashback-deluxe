<?php


namespace App\Http\View\Composers;

use App\Services\HowDoesItWorkService;
use Illuminate\Contracts\View\View;

class HowWorkComposer
{

    /**
     * @var
     */
    protected $howWorkService;

    /**
     * HowWorkComposer constructor.
     * @param HowDoesItWorkService $doesItWorkService
     */
    public function __construct(HowDoesItWorkService $doesItWorkService)
    {
        $this->howWorkService = $doesItWorkService;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $items = $this->howWorkService->getHowWorks();
        $view->with('items', $items);
    }

}
