<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class ReCaptcha implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */

    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $response = Http::get("https://www.google.com/recaptcha/api/siteverify", [
            'secret' => config('captcha.recaptcha_secret'),
            'response' => $value,
            'remoteip' => request()->ip(),
        ]);

        if (!($response->json()["success"] ?? false)) {
            $fail('The :attribute is invalid.');
        }
    }
}
