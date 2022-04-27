<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core;
use Waithirajon\ImageUploadSiteMvc\app\core\Application;

class Controller
{
    public string $layout = "";
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    public function view($view, $params = [])
    {
        return Application::$app->router->view($view, $params);
    }
}