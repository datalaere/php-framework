<?php

// Cache
if($app->get('config.cache.enabled')) {
    $app->set('Cache', new PHP\Filesystem\Cache(
        ['cache_dir' => $app->get('config.cache.cache_path')]
    ));
}