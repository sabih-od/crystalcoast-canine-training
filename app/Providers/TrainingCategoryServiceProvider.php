<?php

namespace App\Providers;

use App\Services\Admin\ProductCategoryService;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class TrainingCategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(['front.*'], function ($view) {
            $settingService = app(ProductCategoryService::class);
            $categories = $settingService->getAllProductCategory();
            $view->with('category', $categories);
        });

    }

}
