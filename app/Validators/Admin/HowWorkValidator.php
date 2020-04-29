<?php


namespace App\Validators\Admin;


class HowWorkValidator extends BaseValidator
{
    public function validationDefault()
    {
        $this->validationUpdate();
        $this->validator
            ->required('img');
        return $this->validator;
    }

    public function validationUpdate()
    {
        $this->validator
            ->required('title')
            ->required('text');
        return $this->validator;
    }
}
