<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core;
use Waithirajon\ImageUploadSiteMvc\app\core\Request;
use Waithirajon\ImageUploadSiteMvc\app\core\Response;

class Router
{
    public Response $response;
    public Request $request;

    public static array $routes = [];

    public function __construct(Request $request, Response $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function get($path, $callback)
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve()
    {
        $path = $this->request->path();
        $method = $this->request->method();

        $callback = $this->routes[$method][$path];

        if(!$callback)
        {
            $this->response->setResposeCode(404);
            return $this->view('error.404');
        }

        if(is_string($callback))
        {
            return $this->view($callback);
        }
        if(is_array($callback))
        {
            Application::$app->controller = new $callback[0]();
            $callback[0] = Application::$app->controller;
        }
        
        return call_user_func($callback,$this->request);
    }

    public function view($view, $params = [])
    {

        $layout = $this->layout();
        $content = $this->content($view, $params);

        if (!empty(Application::$app->controller->layout)) {
            return str_replace('{{ content }}', $content, $layout);
        }
        return $content;
    }

    public function layout()
    {

        if (!empty(Application::$app->controller->layout)) {
            $view = implode('/', explode('.',  Application::$app->controller->layout));
        }
        ob_start();
        include_once Application::$rootpath."/resources/views/$view.php";
        return ob_get_clean();
    }

    public function content($view, $params)
    {
        foreach ($params as $key => $val)
        {
            $$key = $val;
        }

        ob_start();

        $view = implode('/', explode('.',  $view));
        include_once Application::$rootpath."/resources/views/$view.php";
        return ob_get_clean();
    }
}