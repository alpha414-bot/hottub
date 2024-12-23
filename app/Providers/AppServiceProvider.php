<?php

namespace App\Providers;

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
        //
        View::share("animals", ["falcon", "hawk", "jaguar", "tiger", "wolf", "elephant"]);
        View::share('name', 'Gulfsouthspas');
        // View::share('logo', asset("/img/gulfsouthspas.png"));
        View::share('logo', "https://www.dothanhottubs.com/web/image/website/1/logo/Dothan%20Hot%20Tub%20Warehouse?unique=b364aae");
        View::share('address', "361 Nypro Lane, Dothan, Alabama 36305");
        View::share("map_address", "https://maps.app.goo.gl/VYoaLcADvwPxkThd9");
        View::share("telephone", "(334) 333-3211");
        View::share("mail", "contact@dothanhottubs.com");
        View::share("facebook_link", "");
        View::share("linkedin_link", "");
        View::share("instagram_link", "");
        View::share("twitter_link", "");
        View::share('products', [
            [
                "type" => "the_elephant",
                "name" => "",
                "short_description" => "",
                "long_description" => "",
                "images" => [
                    ""
                ],

            ]
        ]);
    }
}
