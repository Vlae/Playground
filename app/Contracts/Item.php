<?php

namespace App\Contracts;

interface Item
{
    /** @return int */
    public function getId(): int;

    /** @return float */
    public function getPrice(): string;

    /** @return string */
    public function getDescription(): string;

    /** @return string */
    public function getTitle(): string;
}
