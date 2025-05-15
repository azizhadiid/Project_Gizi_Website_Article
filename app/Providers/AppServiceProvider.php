<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

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
        View::composer('admin.templates.mainLayoutAdmin', function ($view) {
            $user = Auth::user();
            $profileAdmin = $user?->adminProfile;

            $view->with('profileAdmin', $profileAdmin);
        });
    }
}
