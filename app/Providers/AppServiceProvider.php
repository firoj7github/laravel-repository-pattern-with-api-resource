<?php

namespace App\Providers;
use App\Repositories\TextRepositories;
use App\Repositories\ImplementTextRepositories;


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
        app()->bind(TextRepositories::class, ImplementTextRepositories::class);
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
