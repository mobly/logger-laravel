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
        $this->package('mobly/logger');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->alias('MoblyLogger', 'Mobly\LoggerLaravel\Facades\Logger');
        $this->app->alias('MoblyLoggerProcessor', 'Mobly\LoggerLaravel\Facades\LoggerProcessor');
        $this->app->alias('MoblyLoggerHandler', 'Mobly\LoggerLaravel\Facades\LoggerHandler');

        $this->app->bind('mobly.logger.processor', function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerProcessorManager');
        });

        $this->app->bind('mobly.logger.processor', function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerProcessorManager');
        });

        $this->app->bind('mobly.logger.handler', function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerHandlerManager');
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
            'mobly.logger.processor',
            'mobly.logger.handler'
        ];
    }
}
