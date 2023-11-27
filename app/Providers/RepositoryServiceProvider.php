<?php

namespace App\Providers;

use App\Interfaces\ResponseRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\ResponseRepository;
use App\Repositories\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(ResponseRepositoryInterface::class, ResponseRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
