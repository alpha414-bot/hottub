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
        View::share('appname', getenv('APP_NAME'));
        View::share('logo', asset("/img/logo.png"));
        View::share('white_logo', asset("/img/white-logo.png"));
        View::share('address', getenv("ADDRESS"));
        View::share("map_address", getenv("MAP_ADDRESS"));
        View::share("telephone", getenv("TELEPHONE"));
        View::share("mail", getenv("MAIL"));
        View::share("facebook_link", getenv("FACEBOOK_LINK"));
        View::share("linkedin_link", getenv("LINKEDIN_LINK"));
        View::share("instagram_link", getenv("INSTAGRAM_LINK"));
        View::share("twitter_link", getenv("TWITTER_LINK"));
    }
}
