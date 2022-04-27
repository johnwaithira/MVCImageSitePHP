<?php

use Dotenv\Dotenv;
use Waithirajon\ImageUploadSiteMvc\app\core\Application;

require_once __DIR__."/../vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

var_dump($_ENV);


$app = new Application();
$app->router->get('/', 'home');
$app->run();
?>
