<?php

namespace App\Providers;

use App\Contracts\Cart;
use App\DTO\Request\RequestData;
use App\Http\Requests\Coupons\ApplyCouponsRequest;
use App\Http\Requests\Coupons\BuyRequest;
use App\Services\Coupons\ApplyCouponService;
use App\Services\Purchases\BuyService;
use App\Strategy\Coupon\ProcessCouponsStrategy;
use Illuminate\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class CouponsServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindApplyCouponService();
        $this->bindBuyService();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }


    private function bindApplyCouponService()
    {
        $this->app->bind(ApplyCouponService::class, static function (Application $app) {
            $service = new ApplyCouponService(
                $app->make(ApplyCouponsRequest::class),
                $app->make(ProcessCouponsStrategy::class)
            );

            $service->handle();

            return $service;
        });
    }

    private function bindBuyService()
    {
        $this->app->bind(BuyService::class, static function (Application $app) {
            $service = new BuyService(
                $app->make(Cart::class),
                $app->make(ProcessCouponsStrategy::class),
                new RequestData($app->make(BuyRequest::class))
            );

            $service->handle();

            return $service;
        });
    }
}
