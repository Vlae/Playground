<?php

namespace App\Strategy\Coupon;

use App\Contracts\Cart;
use App\DTO\CouponDTO;
use App\Entities\ShopCart;

class DiscountCoupon extends AbstractCoupon
{
    /**
     * @param ShopCart $user
     */
    public function __construct(
        private CouponDTO $dto,
        private Cart $cart
    ) {
    }

    /**
     * Add money to user account
     */
    public function apply(): void
    {
        if (!$this->isValid($this->dto->getCode())) {
            return;
        }

        $discountSum = $this->dto->getSum();

        $this->cart->setDiscount($discountSum);
    }
}
