<?php

namespace App\Http\Requests\Coupons;

use App\Http\Rules\Coupons\IsCouponAvailableByDate;
use App\Http\Rules\Coupons\IsCouponExists;
use App\Http\Rules\Coupons\IsNotCouponUsed;
use Illuminate\Foundation\Http\FormRequest;

class BuyRequest extends FormRequest
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'code' => [
                'required',
                'min:8',
                'max:10',
                new IsCouponExists(),
                new IsNotCouponUsed(),
                new IsCouponAvailableByDate()
            ],
        ];
    }
}
