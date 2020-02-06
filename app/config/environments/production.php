<?php

return [
    'errors' => false, // set to false in production
    // Renderer settings
    'renderer' => [
        'template_path' => APP_PATH . 'views/'
        ],
    'cache' => [
        'enabled' => true,
        'ttl' => 60,
        'cache_path' => APP_PATH . 'storage/cache/',
    ],
    // Log settings
    'logger' => [
        'name' => $_ENV['APP_NAME'] ?: 'Slim 3 App',
        'path' => APP_PATH . 'storage/logs/error.log'
    ],
    'mail' => [
        'host'      => '',  // SMTP Host
        'port'      => '',  // SMTP Port
        'username'  => '',  // SMTP Username
        'password'  => '',  // SMTP Password
        'protocol'  => '',   // SSL or TLS
        'default'   => ['email' => 'no-reply@mail.com', 'from' => 'Webmaster'],
    ],
    'connections' => [
        'mysql' => [
            'driver'    => $_ENV['DB_DRIVER'] ?: 'mysql',
            'host'      => $_ENV['DB_HOST'] ?: 'localhost',
            'database'  => $_ENV['DB_NAME'] ?: 'database',
            'username'  => $_ENV['DB_USER'] ?: 'root',
            'password'  => $_ENV['DB_PASS'] ?: 'mysql',
            'charset'   => 'utf8',
            'collation' => 'utf8_unicode_ci',
            'prefix'    => $_ENV['DB_PREFIX'] ?: '',
            'strict'    => false,
        ],
    ],
];