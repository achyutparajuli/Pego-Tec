<?php

namespace App\Providers;

use App\Models\Page;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // to pass the menus dynamically
        View::composer('web.layouts.nav', function ($view)
        {
            $pages = Page::where('display_on_menu', 1)->get();
            $view->with('pages', $pages);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
