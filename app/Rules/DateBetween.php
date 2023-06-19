<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Carbon;
class DateBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): string
    {
        $pickupDate = Carbon::parse($value);
        $lastDate = Carbon::now()->addWeek();

        if ($pickupDate > $lastDate) {
            $fail("The $attribute must be within one week from the current date.");
        }
    }
     /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message():string
    {
        return 'The :attribute must be within one week from the current date.';
    }
}
