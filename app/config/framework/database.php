<?php

// Database
if($app->get('config.connections.enabled')) {
    $app->set('DB', PHP\Crud\Database::singleton(
        $app->get('config.connections.mysql')
    ));
}