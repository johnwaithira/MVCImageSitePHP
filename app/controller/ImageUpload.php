<?php

namespace Waithirajon\ImageUploadSiteMvc\app\controller;

use Waithirajon\ImageUploadSiteMvc\app\core\Application;
use Waithirajon\ImageUploadSiteMvc\app\core\Controller;
use Waithirajon\ImageUploadSiteMvc\app\core\FileHandler;

class ImageUpload extends Controller
{
    public function imageupload()
    {
        $db = Application::$app->db;
        $app = new FileHandler($db);

        if($app->filename('images')->uploadimage())
        {
            $message = "Upload successfully";
        }
        else{
            $message = "Failed to make changes in the database";
        }

        echo $message;
    }
}