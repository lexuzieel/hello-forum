<?php

namespace App\Providers;

use App;
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
        \Carbon\Carbon::setLocale(App::getLocale());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /*
        $this->app->singleton(\Faker\Generator::class, function () {
            return \Faker\Factory::create('ru_RU');
        });
        */
    }
}
