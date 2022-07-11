<?php

namespace App\Services\Coupons;

use App\Contracts\Service;
use App\Strategy\Coupon\ProcessCouponsStrategy;
use Illuminate\Support\Facades\Request;

class ApplyCouponService implements Service
{
    public function __construct(
        private Request $request,
        private ProcessCouponsStrategy $processCouponsStrategy,
    ) {
    }

    public function handle()
    {
        $this->processCouponsStrategy->handle();
    }
}
