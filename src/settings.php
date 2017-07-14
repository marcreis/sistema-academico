<?php
return [
    'settings' => [
        'displayErrorDetails'    => true, // set to false in production
        'addContentLengthHeader' => false, // Allow the web server to send the content-length header

        // Renderer settings
        'renderer'               => [
            'template_path' => __DIR__ . '/../templates/',
        ],
        // Monolog settings
        'logger'                 => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db'                     => [
            'driver'   => 'pgsql',
            'host'     => 'localhost',
            'database' => 'portalaluno',
            'username' => 'postgres',
            'password' => '1408',
            'charset'  => 'utf8'
        ],
    ],
];
