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

/*
*---------------------------------------------------------
* Run The Application
*---------------------------------------------------------*
*/

$app = new Application(dirname(__DIR__));

/*
 * ---------------------------------------------------------
 * Include the Routing File
 * ---------------------------------------------------------
 * */
require_once __DIR__."/../route/web.php";


$app->run();

?>