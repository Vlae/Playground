<?php

namespace App\Providers;

use Illuminate\Http\Request;
use App\DTO\Request\FilterData;
use App\DTO\Request\RequestData;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindRequestData();
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Bind RequestData.
     *
     * @return void
     */
    private function bindRequestData(): void
    {
        $this->app->bind(FilterData::class, static function (Application $app) {
            return new RequestData($app->make(Request::class));
        });
    }
}
