<?php

namespace Waithirajon\ImageUploadSiteMvc\app\route;

use Waithirajon\ImageUploadSiteMvc\app\core\Application;

class Route
{
    public static function get($path, $callback)
    {
        return Application::$app->router->get($path, $callback);
    }
    public static function post($path, $callback)
    {
        return Application::$app->router->post($path, $callback);
    }

    public static function resources($res)
    {
        return Application::$app->router->resources($res);
    }
}