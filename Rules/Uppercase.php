<<<<<<< HEAD
<?php

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class Uppercase
 * @package Modules\Food\Rules
 */
class Uppercase implements Rule {
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The :attribute must be uppercase.';
        //return trans('validation.uppercase');
    }
}
=======
<?php

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class Uppercase
 * @package Modules\Food\Rules
 */
class Uppercase implements Rule {
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        return strtoupper($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The :attribute must be uppercase.';
        //return trans('validation.uppercase');
    }
}
>>>>>>> a6dde0f (first)
