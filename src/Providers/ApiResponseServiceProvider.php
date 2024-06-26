<?php

declare(strict_types=1);

namespace Zerkxubas\ApiResponseLaravel\Providers;

use Illuminate\Support\ServiceProvider;
use Zerkxubas\ApiResponseLaravel\Contracts\ApiResponseInterface;
use Zerkxubas\ApiResponseLaravel\Http\Controllers\ApiResponseController;

final class ApiResponseServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/apiresponse.php' => config_path('apiresponse.php'),
        ], 'apiresponse');        
    }

    public function register()
    {
        // Bind ApiResponse interface with the config class.
        $this->app->singleton(ApiResponseInterface::class, function($app){
            return new (config('apiresponse.implementation', ApiResponseController::class));
        });
    }
}