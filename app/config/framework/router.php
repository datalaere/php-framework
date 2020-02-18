<?php

// Router
$app->set('Router', new PHP\HTTP\Router());
$app->get('Router')->setControllersPath(APP_PATH . 'controllers/');