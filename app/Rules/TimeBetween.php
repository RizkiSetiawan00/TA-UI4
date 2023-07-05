<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    function passes($attribute, $value) {
        $ambilTanggal = Carbon::parse($value);
        $waktuAmbil = Carbon::createFromTime($ambilTanggal->hour, $ambilTanggal->minute, $ambilTanggal->second);

        $waktuBuka = Carbon::createFromTimeString('14:00:00');
        $waktuTutup = Carbon::createFromTimeString('23:00:00');

        return $waktuAmbil->between($waktuBuka, $waktuTutup) ? true : false;
    }

    function message() {
        return 'Ini Pesan TIMEBETWEEN???';
    }
}
