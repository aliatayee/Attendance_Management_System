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
        \Queue::before(function (\Illuminate\Queue\Events\JobProcessing $event) {
            // This runs just before a job is processed
        });

        // To catch it before it hits the DB/Redis:
        \Queue::failing(function (\Illuminate\Queue\Events\JobFailed $event) {
            Log::error('Payload Error Data:', [$event->job->getRawBody()]);
        });
    }
}
