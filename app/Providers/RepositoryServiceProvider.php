<?php

namespace Someline\Providers;

use Illuminate\Support\ServiceProvider;
use Someline\Repositories\Eloquent\UserRepositoryEloquent;
use Someline\Repositories\Interfaces\UserRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(\Someline\Repositories\Interfaces\TextnowRepository::class, \Someline\Repositories\Eloquent\TextnowRepositoryEloquent::class);
        //:end-bindings:
    }
}
