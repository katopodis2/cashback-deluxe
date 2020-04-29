<?php


namespace App\Http\View\Composers;


use App\Services\FaqService;
use Illuminate\Contracts\View\View;

class FaqButNotImportantComposer
{
    /**
     * @var
     */
    protected $faqService;

    /**
     * FaqButNotImportantComposer constructor.
     * @param FaqService $faqService
     */
    public function __construct(FaqService $faqService)
    {
        $this->faqService = $faqService;
    }

    /**
     * @param View $view
     */
    public function compose(View $view)
    {
        $items = $this->faqService->getAllFaqButNotImportant();
        $view->with('faqButNotImportant', $items);
    }
}
