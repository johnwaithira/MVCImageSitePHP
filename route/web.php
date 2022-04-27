<?php

use Waithirajon\ImageUploadSiteMvc\app\route\Route;

Route::get('/','home');
Route::get('/upload','upload');
Route::get('/gallery', 'view');


Route::post('/upload', 'Post Upload');