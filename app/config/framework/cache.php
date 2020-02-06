<?php

// Cache
if($app->get('config.cache.enabled')) {
    $app->set('ObjectCache', new PHP\Filesystem\ObjectCache(
        $app->get('config.cache.cache_path'),
        $app->get('config.cache.ttl')
    ));
}