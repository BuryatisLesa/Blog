<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$path_controller = "App\\Http\\Controllers\\";

Route::get('/', function () {
    return view('welcome');
});

Route::get("/posts", $path_controller . "PostController@index");

Route::get("/post/create", $path_controller . "PostController@create");
