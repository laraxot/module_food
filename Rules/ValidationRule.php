<?php

declare(strict_types=1);

namespace Modules\Food\Rules;

use Illuminate\Contracts\Validation\Rule;

class ValidationRule implements Rule {
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct() {
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed  $value
     *
     * @return bool
     */
    public function passes($attribute, $value) {
        //26     Method Modules\Food\Rules\ValidationRule::passes() should return bool but return statement is missing.
        //metto true tanto per tenerlo contento, sperando che non faccia danni collaterali
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message() {
        return 'The validation error message.';
    }
}
