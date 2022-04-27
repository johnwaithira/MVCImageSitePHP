<?php

use Waithirajon\ImageUploadSiteMvc\app\controller\HomeController;
use Waithirajon\ImageUploadSiteMvc\app\route\Route;

Route::get('/',[HomeController::class, 'home']);
Route::get('/upload',[HomeController::class, 'upload']);
Route::get('/gallery', 'view');


Route::post('/upload', 'Post Upload');