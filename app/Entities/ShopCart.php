<?php

namespace App\Entities;

use App\Contracts\Cart;
use App\Contracts\Item;
use Illuminate\Support\Collection;

final class ShopCart implements Cart
{
    private Collection $items;
    private string $discount = '0.00';

    public function __construct()
    {
        $this->items = collect();
    }

    /**
     * @param Item $item
     * @return bool
     */
    public function add(Item $item): bool
    {
        $this->items->add($item);
    }

    /**
     * @param Item $item
     * @return void
     */
    public function remove(Item $item): void
    {
        // todo:: remove only first item;
        dd($this->items->first(fn ($value) => $value === $item->getId()));
        $this->items->first(fn ($value) => $value === $item->getId());
    }

    /**
     * @return Collection
     */
    public function get(): Collection
    {
        return $this->items;
    }

    /**
     * @return string
     */
    public function calculate(): string
    {
        $sum = '0.00';

        /** @var Item $item */
        foreach ($this->items as $item) {
            $sum = bcadd($sum, $item->getPrice(), 2);
        }

        return bcsub($sum, $this->discount, 2);
    }

    /**
     * @param string $sum
     * @return void
     */
    public function applyDiscount(string $sum): void
    {
        $this->discount = bcadd($this->discount, $sum, 2);
    }
}
