<?php

namespace MNShuhailey\PerformanceDashboard\Logger;

/**
 * Class Logger
 *
 * We need this class to be able to use our own log handler.
 *
 * @package MNShuhailey\PerformanceDashboard\Logger
 */
class Logger extends \Monolog\Logger
{
    // Fix for   phpcs --standard=MEQP2   warning
    const I_AM_NOT_EMPTY = true;
}
