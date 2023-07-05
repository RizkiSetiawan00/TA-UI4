<?php

namespace App\Rules;

use Closure;

use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class DateBetween implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     * 
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }
     */

    function passes($attribute, $value) {
        $ambilTanggal = Carbon::parse($value);

        return $value >= now();
    }

    function message() {
        return 'You can not set the deadline before today date.';
    }
}
