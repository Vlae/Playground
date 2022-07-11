<?php

namespace App\Contracts;

interface Coupon
{
    public const COUPON_TYPE_DISCOUNT = 'discount';
    public const COUPON_TYPE_DEPOSIT = 'deposit';

    /**
     * @return void
     */
    public function apply(): void;
}
