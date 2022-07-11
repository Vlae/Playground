<?php

namespace App\Services\Purchases;

use App\Contracts\Cart;
use App\Contracts\Service;
use App\DTO\Request\FilterDataInterface;
use App\Strategy\Coupon\ProcessCouponsStrategy;
use Illuminate\Foundation\Http\FormRequest;

class BuyService implements Service
{
    public function __construct(
        private Cart $cart,
        private ProcessCouponsStrategy $processCouponsStrategy,
        private FilterDataInterface $filterData
    ) {
    }

    public function handle()
    {
        $this->cart->setDiscount();
        // TODO: Implement handle() method.
    }
}
