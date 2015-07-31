<?php namespace Mobly\LoggerLaravel\Manager;

use Mobly\Logger\Processor\UidProcessor;

class LoggerProcessorManager
{
    /**
     * @param string $key
     * @return UidProcessor
     */
    public static function getUidProcessor($key)
    {
        return new UidProcessor($key);
    }
}
