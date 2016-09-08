<?php
// To help the built-in PHP dev server, check if the request was actually for
// something which should probably be served as a static file
if (PHP_SAPI === 'cli-server' && $_SERVER['SCRIPT_FILENAME'] !== __FILE__) {
    return false;
}

session_start();

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../sources/autoload.php';

require __DIR__ . '/../vendor/php-error/php-error.php';
\php_error\reportErrors();

$settings = require __DIR__ . '/../sources/settings.php';
$app = new \Slim\App($settings);

require __DIR__ . '/../sources/container.php';
require __DIR__ . '/../sources/routes.php';

$app->run();
