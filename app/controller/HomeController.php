<?php

namespace Waithirajon\ImageUploadSiteMvc\app\controller;

use Waithirajon\ImageUploadSiteMvc\app\core\Controller;

class HomeController extends Controller
{
    public function home()
    {
        $this->setLayout('layouts.app');
        return $this->view('home');
    }

    public function upload()
    {
        $this->setLayout('layouts.app');
        return $this->view('upload');
    }
}