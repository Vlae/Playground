<?php

namespace App\Http\Controllers;

use App\Models\Coupon;
use App\Services\Coupons\ApplyCouponService;
use Illuminate\Routing\Controller as BaseController;
use Symfony\Component\Routing\Annotation\Route;

class CouponController extends BaseController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $coupons = Coupon::query()
            ->orderBy('used')
            ->get();

        return view('coupons.coupons', [
            'coupons' => $coupons
        ]);
    }

    /**
     * @Route('/coupon')
     * @param ApplyCouponService $service
     * @return void
     */
    public function applyCoupon(ApplyCouponService $service): void
    {

    }
}
