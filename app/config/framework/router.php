<?php

// Router
$app->set('Router', new PHP\Http\Router());
$app->get('Router')->setControllersPath(APP_PATH . 'controllers/');