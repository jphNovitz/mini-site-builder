<?php

namespace App\Providers;

use App\Contracts\PublishSiteContract;
use App\Contracts\SendConfirmationEmailContract;
use App\Services\PublishSiteService;
use App\Services\SendConfirmationEmailService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(PublishSiteContract::class, PublishSiteService::class);
        $this->app->bind(SendConfirmationEmailContract::class, SendConfirmationEmailService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
