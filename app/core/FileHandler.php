<?php

namespace Waithirajon\ImageUploadSiteMvc\app\core;
use Waithirajon\ImageUploadSiteMvc\database\Database;

class FileHandler
{
    public string $filename;
    public string $order;

    public function __construct(Database $database)
    {
        $this->filename = "image";
        $this->database = $database;
        $this->order = "asc";
    }

    public function uploadimage()
    {
        $image_id = bin2hex(random_bytes(5));
        $validExtensions = [
            'jpeg',
            'jpg',
            'png',
            'svg',
            'webp'
        ];

        $flag = 0;
        foreach ($_FILES[$this->filename]['tmp_name'] as $key => $value)
        {
            $extension = pathinfo($_FILES[$this->filename]['name'][$key], PATHINFO_EXTENSION);
            $filename = "mvcImages-".bin2hex(random_bytes(4)) . '-johnWaithira.' .$extension;
            $filename_tmp = $_FILES[$this->filename]['tmp_name'][$key];

            if(file_exists(dirname(__DIR__)."/public/storage/".$filename))
            {
                $filename = str_replace('.','-', basename($filename, $extension));
                $filename = $filename ."-".bin2hex(random_bytes(3)) ."johnwaithira.". $extension;
            }

            if(move_uploaded_file($filename_tmp, dirname(__DIR__)."/../public/storage/".$filename))
            {
                $qry = $this
                    ->database
                    ->pdo
                    ->prepare(
                        'INSERT INTO images(image_id, image_file)
                               VALUES(?, ?)'
                    );
                ($qry->execute([$image_id, $filename])) ? $flag = 0 : $flag = 1;
            }
            else{
                echo  "Error in uploading/Storing in Database";
            }

        }

        ($flag == 1) ? $message = false : $message = true;

        return $message;
    }

    public function fetchAllImages()
    {
        $qry = $this
            ->database
            ->pdo
            ->query('SELECT * FROM images order by id '.$this->order);
        return $qry->fetchAll();

    }

    public function fetchImage($id)
    {
        $qry = $this
            ->database
            ->pdo
            ->query("SELECT * FROM images where id = '$id'");
        echo  "<pre>";
        var_dump($qry->fetch());
        echo  "</pre>";

    }

    public function order($order)
    {
        $this->order = $order;
        return $this;
    }
    public function filename($name)
    {
        $this->filename = $name;
        return $this;
    }
}