<?php

namespace App\DTO;

use App\Contracts\DTO;
use JetBrains\PhpStorm\ArrayShape;

class ShopItemDTO implements DTO
{
    /**
     * @param int $id
     * @param string $price
     * @param string $title
     * @param string $description
     */
    public function __construct(
        private int $id,
        private string $price,
        private string $title,
        private string $description,
    ) {
    }

    /**
     * @return array
     */
    #[ArrayShape(['id' => "int", 'price' => "string", 'title' => "string", 'description' => "string"])]
    public function toArray(): array
    {
        return [
            'id'            => $this->id,
            'price'         => $this->price,
            'title'         => $this->title,
            'description'   => $this->description,
        ];
    }
}
