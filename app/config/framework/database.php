<?php

// Database
if($app->get('config.connections.enabled')) {
    $app->set('DB', PHP\CRUD\Database::singleton(
        $app->get('config.connections.mysql')
    ));
}