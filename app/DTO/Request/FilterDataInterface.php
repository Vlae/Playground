<?php

namespace App\DTO\Request;

/**
 * Class FilterDataInterface
 *
 * @package App\DTO
 */
interface FilterDataInterface
{
    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params): self;

    /**
     * @return mixed
     */
    public function all(): array;

    /**
     * @param string $key
     * @param        $param
     * @return $this
     */
    public function setParam(string $key, $param): self;

    /**
     * @param string $key
     *
     * @return mixed
     */
    public function getParam(string $key);

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool;

    /**
     * @param string $key
     * @return $this
     */
    public function remove(string $key): self;
}
