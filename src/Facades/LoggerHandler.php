<?php namespace Mobly\LoggerLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class LoggerHandler extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mobly.logger.handler';
    }
}
