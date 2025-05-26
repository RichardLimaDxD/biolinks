<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class CheckHandler implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (!preg_match('/^@[a-zA-Z0-9_-]+$/', $value)) {
            $fail('The :attribute must start with "@" and can only contain letters, numbers, underscores, and hyphens.');
        }
    }
}
