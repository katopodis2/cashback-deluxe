<?php


namespace App\Validators;


class CashBackReviewValidator extends BaseValidator
{
    /**
     * @return \LaraValidation\CoreValidator
     */
    public function validationDefault()
    {
        $this->validator
            ->required('overall_assessment')
            ->required('comment');
        return $this->validator;
    }
}
