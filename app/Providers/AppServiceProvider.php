<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\models\Category;
use View;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = Category::where('status',1)->orderBy('created_at','ASC')->get(['id','title']);

         View::share('category', $category);
    }
}
