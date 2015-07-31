<?php namespace Mobly\LoggerLaravel;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class LoggerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

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
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('MoblyLogger', 'Mobly\LoggerLaravel\Facades\Logger');
            $loader->alias('MoblyLoggerProcessor', 'Mobly\LoggerLaravel\Facades\LoggerProcessor');
            $loader->alias('MoblyLoggerHandler', 'Mobly\LoggerLaravel\Facades\LoggerHandler');
        });

        $this->app['mobly.logger'] = $this->app->share(function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerManager');
        });

        $this->app['mobly.logger.processor'] = $this->app->share(function ($app) {
            return $app->make('Mobly\LoggerLaravel\Manager\LoggerProcessorManager');
        });

        $this->app['mobly.logger.handler'] = $this->app->share(function ($app) {
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
