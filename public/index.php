<?php

use Dotenv\Dotenv;
use Waithirajon\ImageUploadSiteMvc\app\core\Application;


/*
 * ------------------------------------------------------
 * Registering Auto Loader
 * ------------------------------------------------------*
 *
 **/

require_once __DIR__."/../vendor/autoload.php";

/*
 * ------------------------------------------------------
 * Get .env file to setup $_ENV (Environment)
 * ------------------------------------------------------*
 *
 **/

$dotenv = \Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();


$dbparams = [
    'dsn' => $_ENV['DB_CONNECTION'].":host=" . $_ENV['DB_HOST'] .";dbname=".$_ENV['DB_DATABASE'],
    'user' => $_ENV['DB_USERNAME'],
    'password' => $_ENV['DB_PASSWORD']
];
/*
*---------------------------------------------------------
* Run The Application
*---------------------------------------------------------*
*/

$app = new Application(dirname(__DIR__), $dbparams);

/*
 * ---------------------------------------------------------
 * Include the Routing File
 * ---------------------------------------------------------
 * */
require_once __DIR__."/../route/web.php";


$app->run();

?>