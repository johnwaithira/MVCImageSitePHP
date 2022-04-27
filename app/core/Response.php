<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core;

class Response
{
    public function setResposeCode($code)
    {
        http_response_code($code);
    }

}