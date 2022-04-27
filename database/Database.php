<?php

namespace Waithirajon\ImageUploadSiteMvc\database;

class Database
{
    public $pdo = null;
    public function __construct($params)
    {
        try {
            $this->pdo = new \PDO($params['dsn'], $params['user'], $params['password']);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }catch (\Exception $exception)
        {
            echo  "<pre>";
            var_dump($exception);
            echo  "</pre>";
        }
    }

}