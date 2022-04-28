<?php

use Waithirajon\ImageUploadSiteMvc\app\controller\HomeController;
use Waithirajon\ImageUploadSiteMvc\app\controller\ImageUpload;
use Waithirajon\ImageUploadSiteMvc\app\route\Route;

Route::get('/',[HomeController::class, 'home']);
Route::get('/upload',[HomeController::class, 'upload']);
Route::get('/gallery', 'view');


Route::post('/upimageuploadload', 'Post Upload');
Route::post('/upload', [ImageUpload::class, 'imageupload']);
Route::post('/brokenlink', function(){
    var_dump($_POST['brokenlink']);
});