<?php

declare(strict_types=1);

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;

/**
 * Class Slugify.
 */
class Slugify implements Rule {
    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        return str_slug($value) === $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The :attribute must be slugify.';
        //return trans('validation.uppercase');
    }
}
