<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
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
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        //
        View::share('appname', config('app.name'));
        View::share('logo', asset("/img/logo.png"));
        View::share('white_logo', asset("/img/white-logo.png"));
        View::share('address', config("app.address"));
        View::share("map_address", config("app.map_address"));
        View::share("telephone", config("app.telephone"));
        View::share("mail", config("app.mail"));
        View::share("facebook_link", config("app.facebook_link"));
        View::share("linkedin_link", config("app.linkedin_link"));
        View::share("instagram_link", config("app.instagram_link"));
        View::share("twitter_link", config("app.twitter_link"));
    }
}
