<?php

namespace App\Providers;

use App\Services\Admin\CategoryService;
use App\Services\Admin\CMSPagesService;
use App\Services\Admin\ProductSizeService;
use App\Services\Admin\SettingService;
use App\Services\blog\BlogService;
use App\Services\Admin\FaqService;
use App\Services\Admin\GraduateService;
use App\Services\Admin\TrainingService;
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
        $this->app->singleton(FaqService::class, function ($app) {
            return FaqService::getInstance();
        });
        $this->app->singleton(TrainingService::class, function ($app) {
            return TrainingService::getInstance();
        });
        $this->app->singleton(GraduateService::class, function ($app) {
            return GraduateService::getInstance();
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
