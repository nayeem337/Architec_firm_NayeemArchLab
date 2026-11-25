<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Contact;
use App\Models\Setting;
use View;

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

        View::composer(
            [
                'frontend.includes.header',
                'admin.includes.header',
                 'frontend.includes.footer', // add more views here
                 'frontend.master',
                 'frontend.contact',
            ],
            function ($view) {
                $view->with('contacts', Contact::all());
                $view->with('settings', Setting::all());
            }
        );



    }
}
