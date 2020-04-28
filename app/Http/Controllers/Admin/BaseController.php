<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    protected $baseService;


    public function redirectBackWithErrors($message = '', $model = '', $service = null)
    {
        if ($service === null) {
            $service = $this->baseService;
        }

        if (empty($message)) {
            $model = (empty($model) ? 'Base Model' : $model);
            $message = sprintf('%s can not be saved. Please see errors below', $model);
        }

//        flash($message, 'danger');

        return redirect()->back()->withInput()->withErrors($service->getValidationErrors());
    }

}
