<?php

namespace App\Strategy\Coupon;

use App\Contracts\Coupon;

class ProcessCouponsStrategy
{
    /**
     * @var array
     */
    private array $coupons;

    /**
     * @param Coupon ...$coupons
     */
    public function __construct(Coupon ...$coupons)
    {
        $this->coupons = $coupons;
    }

    public function handle(): void
    {
        /** @var Coupon $coupon */
        foreach ($this->coupons as $coupon) {
            $coupon->apply();
        }
    }
}
