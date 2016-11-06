<?php

namespace App\Providers;

use App\Model\Product\ProductMainCategory;
use App\Model\Product\ProductMainCategoryInterface;
use App\Services\ProductsService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
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
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductMainCategoryInterface::class, ProductMainCategory::class);
    }
}
