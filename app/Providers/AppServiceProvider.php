<?php

namespace App\Providers;

use App\Models\ProductType;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        // $consumerCategories = ProductType::where('product_category_id', ProductType::CONSUMER_TYPE)->get();
        // $professionalCategories = ProductType::where('product_category_id', ProductType::PROFESSIONAL_TYPE)->get();

        // View::share('consumerCategories', $consumerCategories);
        // View::share('professionalCategories', $professionalCategories);
    }
}
