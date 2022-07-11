<?php

namespace App\Entities;

use App\Contracts\Item;
use App\DTO\ShopItemDTO;

final class ShopItem implements Item
{
    /**
     * @param ShopItemDTO $dto
     */
    public function __construct(private ShopItemDTO $dto) {}

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->dto->toArray()['id'];
    }

    /**
     * @return string
     */
    public function getPrice(): string
    {
        return $this->dto->toArray()['price'];
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->dto->toArray()['title'];
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->dto->toArray()['description'];
    }
}
