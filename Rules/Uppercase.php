<?php

declare(strict_types=1);

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class Uppercase.
 */
class Uppercase implements Rule {
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
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
        // return trans('validation.uppercase');
    }
}
