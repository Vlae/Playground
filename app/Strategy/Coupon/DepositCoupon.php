<?php

namespace App\Strategy\Coupon;

use App\Contracts\Coupon;
use App\DTO\CouponDTO;
use App\Models\User;

class DepositCoupon implements Coupon
{
    /**
     * @param CouponDTO $dto
     * @param User $user
     */
    public function __construct(
        private CouponDTO $dto,
        private User $user
    ) {
    }

    /**
     * Add money to user account
     */
    public function apply(): void
    {
        $depositSum = $this->dto->getSum();
        // todo:: add money to account
        $user = $this->user;
    }
}
