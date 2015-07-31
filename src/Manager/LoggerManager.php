<?php namespace Mobly\LoggerLaravel\Manager;

use Mobly\Logger\Uid;

class LoggerManager
{
    /**
     * @param string $key
     * @return string
     */
    public static function uid($key = null)
    {
        return (string) Uid::instance($key);
    }
}
