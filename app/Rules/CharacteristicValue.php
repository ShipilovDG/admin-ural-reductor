<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Database\Eloquent\Factories\Factory;

class CharacteristicValue implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ( ! is_array($value)) {
            return false;
        }
        if (! Factory::factoryForModel("")){

        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Values must be array of json strings like {"designantion":"qwe", "print_designantion": "qweqweqwe"';
    }
}
