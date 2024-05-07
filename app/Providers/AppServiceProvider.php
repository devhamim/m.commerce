<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;
use View;
use Cookie;

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

        // footer category
    View::composer('frontend.layouts.header', function ($view){
        $view->with('categorys', Category::all());

        if (Cookie::has('shopping_cart')) {
            $cookie_data = stripslashes(Cookie::get('shopping_cart'));
            $cart_data = json_decode($cookie_data, true);
        } else {
            $cart_data = [];
        }

        // Pass $cart_data to the view
        $view->with('totalItemsInCart', count($cart_data));
    });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // frontend header
        View::composer('frontend.layouts.header', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend header category
        View::composer('frontend.category', function ($view){
            $view->with('categorys', Category::all());
        });
        // frontend footer
        View::composer('frontend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });

        // frontend app
        View::composer('frontend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });

        // backend footer
        View::composer('backend.layouts.footer', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend sidebar
        View::composer('backend.layouts.sidebar', function ($view){
            $view->with('setting', Setting::all());
        });
        // backend app
        View::composer('backend.layouts.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth app
        View::composer('auth.app', function ($view){
            $view->with('setting', Setting::all());
        });
        // auth login
        View::composer('auth.login', function ($view){
            $view->with('setting', Setting::all());
        });
    }
}
