<?php

namespace App\Providers;

use App\Services\Admin\CategoryService;
use App\Services\Admin\CMSPagesService;
use App\Services\Admin\ProductSizeService;
use App\Services\Admin\SettingService;
use App\Services\blog\BlogService;
use App\Services\Testimonial\TestimonialService;
use App\Services\Notification\NotificationService;
use App\Services\Order\OrderService;
use App\Services\Payment\Gateways\StripeCheckoutService;
use App\Services\Payment\PaymentService;
use App\Services\Product\ProductReviewService;
use App\Services\Product\ProductService;
use App\Services\User\UserService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(UserService::class, function ($app) {
            return UserService::getInstance();
        });

        $this->app->singleton(CMSPagesService::class, function ($app) {
            return CMSPagesService::getInstance();
        });

        $this->app->singleton(SettingService::class, function ($app) {
            return SettingService::getInstance();
        });
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
}
