<?php

define('APP_ROOT', __DIR__);

require_once APP_ROOT.'/vendor/autoload.php';
(new Dotenv\Dotenv(APP_ROOT))->load();

$container = new \Slim\Container();
require_once APP_ROOT.'/config/resources.php';
