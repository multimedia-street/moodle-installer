<?php

require_once __DIR__ . '/constants.php';

/*
 * Check PHP version
 */
if (version_compare(PHP_VERSION, MIN_PHP_VERSION, '<')) {
    exit('You need at least PHP '. MIN_PHP_VERSION .' to install Moodle 3.2.');
}

if (DEBUG) {
    ini_set('display_errors', 1);
    error_reporting(1);
} else {
    ini_set('display_errors', 0);
    error_reporting(0);
}

@set_time_limit(TIMEOUT_LIMIT);

spl_autoload_register(function ($class) {
    include $class . '.php';
});
