<?php


namespace App\Http\Controllers\Admin;


use App\Services\Admin\FaqService;

class FaqController extends BaseController
{

    /**
     * @var string
     */
    protected $baseView = "admin.faq";
    /**
     * @var string
     */
    protected $baseFlashName = "FAQ";

    /**
     * @var string
     */
    protected $baseRoute = "admin.faq";
    /**
     * FaqController constructor.
     * @param FaqService $faqService
     */
    public function __construct(FaqService $faqService)
    {
        $this->baseService = $faqService;
    }


}
