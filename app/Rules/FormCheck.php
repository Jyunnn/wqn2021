<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class FormCheck implements Rule
{
    private $name;
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
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // $attribute 是對應表單 Name
        // $value 就是該 表單 的 input valie
        $this -> name = $attribute;
        if ( $attribute == 'product_name' ) {
            return $value == 123;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return "The validation error message -> $this->name";
    }
}
