<?php


namespace App\Http\Controllers;


class BaseController extends Controller
{
    /**
     * @var
     */
    protected $baseService;

    /**
     * BaseController constructor.
     */
//    public function __construct()
//    {
//        parent::__construct();
//    }
    public function redirectBackWithErrors($message = '', $model = '', $service = null)
    {
        if ($service === null) {
            $service = $this->baseService;
        }

        if (empty($message)) {
            $model = (empty($model) ? 'Base Model' : $model);
            $message = sprintf('%s can not be saved. Please see errors below', $model);
        }

        flash($message, 'danger');

        return redirect()->back()->withInput()->withErrors($service->getValidationErrors());
    }
}
