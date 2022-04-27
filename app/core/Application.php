<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core;
use Waithirajon\ImageUploadSiteMvc\app\core\Request;
use Waithirajon\ImageUploadSiteMvc\app\core\Response;
use Waithirajon\ImageUploadSiteMvc\app\core\Router;
class Application
{
    public Response $response;
    public Request $request;
    public Router $router;

    public static Application $app;

    public function __construct()
    {
        self::$app = $this;
        $this->request = new Request();
        $this->response = new Response();
        $this->router = new Router($this->request, $this->response);
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}