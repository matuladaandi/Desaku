<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // mendefiniskan Gate yg namanya admin 
        Gate::define('admin', function (User $user) {
            // hanya bisa di akses oleh user yg usernamenya bernilai true pd colom is_admin
            return $user->is_admin;
        });
    }
}
