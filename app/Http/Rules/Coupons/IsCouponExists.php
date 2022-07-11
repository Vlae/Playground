<?php

namespace App\Http\Rules\Coupons;

use App\Models\Coupon;
use Illuminate\Validation\Rule;

class IsCouponExists extends Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $code
     * @return bool
     */
    public function passes($attribute, $code): bool
    {
        return Coupon::isExist($code);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Coupon not valid';
    }
}
