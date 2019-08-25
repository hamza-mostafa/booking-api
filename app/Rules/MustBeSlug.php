<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class MustBeSlug implements Rule
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
     * @param  bool $attribute if set to true, it will include the underscores as well
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value) : bool
    {
        if($attribute === true){
        return preg_match('/^\w+(?:-\w+)*$/', $value);
        }else{
        return preg_match('/^[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*$/', $value);
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return 'please note that this should be url friendly';
    }
}
