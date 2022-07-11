<?php

namespace App\Contracts;

interface DTO
{
    /**
     * @return array
     */
    public function toArray(): array;
}
