<?php
require_once('../vendor/autoload.php');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$a1=1;
// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('log/my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');

$log->warning('Memory '.memory_get_usage());
$log->warning('Memory '.memory_get_peak_usage());

echo phpinfo();
