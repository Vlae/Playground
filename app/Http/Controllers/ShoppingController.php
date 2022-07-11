<?php

namespace App\Http\Controllers;

use App\Services\Purchases\BuyService;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Routing\Annotation\Route;

class ShoppingController extends BaseController
{
    /**
     * @Route('/buy')
     */
    public function index(BuyService $service)
    {

        return view('shop.buy');
    }
}
