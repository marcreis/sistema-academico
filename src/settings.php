<?php
$dotEnv = new \Dotenv\Dotenv(__DIR__ . "/../");
$dotEnv->load();
return [
    'settings' => [
        'displayErrorDetails'    => true,
        // set to false in production
        'addContentLengthHeader' => false,
        // Allow the web server to send the content-length header

        // Renderer settings
        'renderer'               => [
            'template_path' => __DIR__ . '/../templates/',
        ],
        // Monolog settings
        'logger'                 => [
            'name'  => 'portal-aluno',
            'path'  => __DIR__ . '/../logs/app.log',
            'level' => \Monolog\Logger::DEBUG,
        ],
        'db'                     => [
            'driver'   => env('DB_DRIVER'),
            'host'     => env('DB_HOST'),
            'database' => env('DB_NAME'),
            'username' => env('DB_USER'),
            'password' => env('DB_PASSWORD'),
            'charset'  => env('DB_CHARSET'),
            'port'     => env('DB_PORT')
        ],
    ],
];
postgres://ptlslsqvxykywr:b3dc376a4b491ac8143036863701223b6c41aeb242b1d518dfc16e6d9cbf1ed7@ec2-23-23-86-179.compute-1.amazonaws.com:5432/dh6stt6gbulea