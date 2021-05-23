<?php

use App\App;
use App\Database\DBConnection;
use App\Database\QueryBuilder;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require 'vendor/autoload.php';

print_r('before_config');
exit;

App::set('config', require 'config.php');

//$log = new Logger('PHP_BASICS');
//$log->pushHandler(new StreamHandler('queries.log', Logger::INFO));

print_r(App::get('config')['database']);

//QueryBuilder::make(
//    DBConnection::make(App::get('config')['database'])
//);

