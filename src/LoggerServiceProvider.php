<?php namespace Mobly\LoggerLaravel;

use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('MoblyLogger', 'Mobly\LoggerLaravel\Facades\Logger');

        $this->app->bind('mobly.logger', function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerManager');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'mobly.logger',
        ];
    }
}
