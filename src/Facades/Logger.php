<?php namespace Mobly\LoggerLaravel\Facades;

use Illuminate\Support\Facades\Facade;

class Logger extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'mobly.logger';
    }
}
