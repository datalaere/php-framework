<?php

// View
$app->set('View', PHP\MVC\View::singleton());
$app->get('View')->setTemplatePath(APP_PATH . 'views/');