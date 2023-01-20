<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $comicsList = config("tempComicsDb");
    return view('home',[
        "comicsList" => $comicsList
    ]);
});


Route::get("/comics", function(){
    $comicsList = config("tempComicsDb2");
    return view("comics.comic", [
        "comicsList" => $comicsList
    ]);
});