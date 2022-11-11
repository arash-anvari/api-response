<?php

namespace ArashAnvari\ApiResponse\Providers;

use ArashAnvari\ApiResponse\ApiResponse;
use Illuminate\Support\ServiceProvider;

class ApiResponseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind('ApiResponse', function () {
            return new ApiResponse();
        });
    }
}
