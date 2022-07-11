<?php

namespace App\Strategy\Coupon;

use App\Models\Coupon;
use Carbon\Carbon;

abstract class AbstractCoupon
{
    /**
     * @param string $code
     * @return bool
     */
    protected function isValid(string $code): bool
    {
        $coupon = Coupon::query()
            ->where('code', $code)
            ->get();

        if (
            $coupon->get('used') ||
            Carbon::now() > Carbon::createFromFormat('yyyy-mm-dd hh:mm:ss', $coupon->get('availableTo'))
        ) {
           return false;
        }

        return true;
    }

    abstract function apply(): void;
}
