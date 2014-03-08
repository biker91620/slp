<?php


if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], array('127.0.0.1', 'fe80::1', '::1', '192.168.1.254', '192.168.1.40'))
) {
    header('HTTP/1.0 403 Forbidden');
    exit('You are not allowed to access this file. Check '.basename(__FILE__).' for more information.');
}
define('SLP_ROOT', getcwd());

require_once __DIR__.'/../vendor/slp/autoload.php';

$kernel = new \Slp\Kernel('dev', true);
$kernel->execute();


