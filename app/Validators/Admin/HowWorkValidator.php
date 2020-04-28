<?php


namespace App\Validators\Admin;


class HowWorkValidator extends BaseValidator
{
    public function validationDefault()
    {
        $this->validator
            ->required('title')
            ->required('text');
        return $this->validator;
    }
}
