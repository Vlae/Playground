<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface Cart
{
    /**
     * @param Item $item
     * @return bool
     */
    public function add(Item $item): bool;

    /**
     * @param Item $item
     * @return void
     */
    public function remove(Item $item): void;

    /**
     * @return Collection
     */
    public function get(): Collection;

    /**
     * @return string
     */
    public function calculate(): string;

    /**
     * @param string $sum
     * @return void
     */
    public function applyDiscount(string $sum): void;
}
