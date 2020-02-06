<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/

$app = PHP\DI\Container::singleton();

/*
|--------------------------------------------------------------------------
| Config application
|--------------------------------------------------------------------------
|
| Get configs for different parts of the application.
|
*/

// ENV
if (file_exists(ROOT_PATH . 'env.ini')) {
    $_ENV = parse_ini_file(ROOT_PATH . 'env.ini');
    $app->set('config', require APP_PATH . 'config/environments/' . $_ENV['APP_ENV'] . '.php');
}

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/

foreach(glob(APP_PATH . 'config/framework/*.{php}', GLOB_BRACE) as $config) {
    require_once $config;
}

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;