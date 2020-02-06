<?php

/**
 * PHP Project
 *
 * @package  PHP Project
 * @author   Datalære <info@datalaere.dk>
 */

define('APP_START', microtime(true));

define('ROOT_PATH', dirname(__DIR__) . DIRECTORY_SEPARATOR);

define('APP_PATH', ROOT_PATH . 'app/');

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require ROOT_PATH .'vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Bootstrapping
|--------------------------------------------------------------------------
|
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once APP_PATH . 'bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

$app->get('Router')->run();