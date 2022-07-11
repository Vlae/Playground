<?php

namespace App\Http\Rules\Coupons;

use App\Models\Coupon;
use Illuminate\Validation\Rule;

class IsNotCouponUsed extends Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $code
     * @return bool
     */
    public function passes($attribute, $code)
    {
        return !Coupon::isUsed($code);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Coupon is already used!';
    }
}
