<?php

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

print_r($_ENV);
exit;

//return [
//    'app' => [
//        'home_url' => $_ENV['APP_URL']
//    ],
//    'database' => [
//        'dsn' => $_ENV['DB_DSN'],
//        'connection' => $_ENV['DB_CONNECTION'] ?? 'mysql',
//        'host' => $_ENV['DB_HOST'],
//        'name' => $_ENV['DB_NAME'],
//        'user' => $_ENV['DB_USER'],
//        'password' => $_ENV['DB_PASSWORD']
//    ]
//];