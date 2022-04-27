<?php

use Dotenv\Dotenv;
use Waithirajon\ImageUploadSiteMvc\app\core\Application;

require_once __DIR__."/../vendor/autoload.php";

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$app = new Application(dirname(__DIR__));

require_once __DIR__."/../route/web.php";

$app->run();
?>
