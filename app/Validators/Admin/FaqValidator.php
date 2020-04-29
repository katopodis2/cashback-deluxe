<?php


namespace App\Validators\Admin;


class FaqValidator extends BaseValidator
{
    public function validationDefault()
    {
        $this->validator
            ->required('question')
            ->required('answer');
        return $this->validator;
    }
}
