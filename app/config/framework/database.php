<?php

// Database
if($app->get('config.connections.enabled')) {
    $app->set('Database', new PHP\Crud\Database(
        $app->get('config.connections.mysql')
    ));
}