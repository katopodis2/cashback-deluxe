<?php


namespace App\Validators;


class ReviewValidator extends  BaseValidator
{
    /**
     * @return \LaraValidation\CoreValidator
     */
    public function validationDefault()
    {
        $this->validator
            ->required('overall'/*,'Please rate the store from 1 to 5 stars, where 1 star is a bad store and 5 stars is a great store.'*/);
        return $this->validator;
    }
}
