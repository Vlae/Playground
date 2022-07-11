<?php

namespace App\DTO\Request;

/**
 * Class FilterData
 *
 * "Wrapper for request"
 *
 * @package App\DTO
 */
class FilterData implements FilterDataInterface
{
    /** @var mixed */
    private array $params = [];

    /** @var mixed */
    private array $headers = [];

    /** @var mixed */
    private array $routeParameters = [];

    /**
     * FilterData constructor.
     *
     * @param array   $params
     * @param array   $headers
     */
    public function __construct(array $params = [], array $headers = [])
    {
        $this->setParams($params);
        $this->setHeaders($headers);
    }

    /**
     * @param array $params
     * @return $this
     */
    public function setParams(array $params): self
    {
        $this->params = $params;

        return $this;
    }

    /**
     * @return mixed
     */
    public function all(): array
    {
        return $this->params;
    }

    /**
     * @param string $key
     * @param        $param
     * @return $this
     */
    public function setParam(string $key, $param): self
    {
        $this->params[$key] = $param;

        return $this;
    }

    /**
     * @param string $key
     * @return mixed
     */
    public function getParam(string $key)
    {
        return $this->params[$key] ?? null;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($this->params[$key]);
    }

    /**
     * @param string $key
     * @return $this
     */
    public function remove(string $key): self
    {
        unset($this->params[$key]);

        return $this;
    }

    /**
     * @param array $headers
     * @return $this
     */
    public function setHeaders(array $headers): self
    {
        $this->headers = $headers;

        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function hasHeader(string $key): bool
    {
        return isset($this->headers[$key]);
    }

    /**
     * @param string $key
     * @return mixed|null
     */
    public function getHeader(string $key)
    {
        return $this->headers[$key][0] ?? null;
    }

    /**
     * @return mixed
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return mixed
     */
    public function getRouteParameters(): array
    {
        return $this->routeParameters;
    }
}
