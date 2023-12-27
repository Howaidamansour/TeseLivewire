<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class SaudiPhone implements Rule {

    public function passes ($attribute, $value) {
        return preg_match('/^9665[0-9]{8}$/', $value);   
     }
   

    public function message()
    {
        return 'The :attribute must be a valid Saudi Arabia phone number.';
    }

}