<?php namespace Mobly\LoggerLaravel\Manager;

use Mobly\Logger\Handler\NewRelicHandler;
use Monolog\Logger;

class LoggerHandlerManager
{
    /**
     * @param int $level
     * @param bool $bubble
     * @param null $appName
     * @param bool $explodeArrays
     * @param null $transactionName
     * @return NewRelicHandler
     */
    public static function getNewRelicHandler(
        $level = Logger::ERROR,
        $bubble = true,
        $appName = null,
        $explodeArrays = false,
        $transactionName = null
    ) {
        return new NewRelicHandler($level, $bubble, $appName, $explodeArrays, $transactionName);
    }
}
