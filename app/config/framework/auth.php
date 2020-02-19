<?php

// Auth
if($app->get('config.connections.enabled')) {
    $app->set('Auth', PHP\Auth\Auth::singleton());
}