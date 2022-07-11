<?php

namespace App\DTO;

use App\Contracts\DTO;

class CouponDTO implements DTO
{
    public function __construct(
        private string $code,
        private string $type,
        private string $availableTo,
        private string $sum,
        private string $isUsed,
    ) {
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function getSum(): string
    {
        return $this->sum;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getAvailableTo(): string
    {
        return $this->availableTo;
    }

    /**
     * @return string
     */
    public function getIsUsed(): string
    {
        return $this->isUsed;
    }

    public function toArray(): array
    {
        return [
            'code'        => $this->code,
            'type'        => $this->type,
            'availableTo' => $this->availableTo,
            'sum'         => $this->sum,
            'isUsed'      => $this->isUsed,
        ];
    }
}
