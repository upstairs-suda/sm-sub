<?php

namespace Submodule\Providers;

use Illuminate\Support\ServiceProvider;
use Submodule\Services\ProductService;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ProductService::class, fn () => new ProductService());
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
