<?php

namespace App\DTO\Request;

use Illuminate\Http\Request;

/**
 * Class RequestData
 *
 * @package App\DTO\Request
 */
class RequestData extends FilterData
{
    /**
     * RequestData constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $requestData = $request->toArray();

        parent::__construct($requestData, $request->headers->all());
    }
}
