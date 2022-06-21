<?php

namespace App\Providers;

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
        // https://stackoverflow.com/questions/68964382/laravel-assets-routes-and-url-not-working-when-browse-https-after-deploy-in-a
        /*
         * Solution 2 : There are another way to allow https by forcing in your AppServiceProvider or Create a new
         * middleware to implement this. In my code snippet I decide to use AppServiceProvider because easy to implement.
         * Open app/Providers/AppServiceProvider.php in any text editor and write
         * $this->app['request']->server->set('HTTPS', true);
         *
         * You may extra check that APP in production mode.
         * if(request()->getRequestUri() != '/health' && $this->app->environment('production')) {
         *             $this->app['request']->server->set('HTTPS', true);
         * }
         */
        $this->app['request']->server->set('HTTPS', true);
    }
}
