<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', "HomeController@index")->middleware("auth");
Route::get('/create', "HomeController@create")->middleware("auth");
Route::post('/store', "HomeController@store")->middleware("auth");;
Route::get('/delete/{id}', "HomeController@delete")->middleware("auth");;

Auth::routes();

Route::get("/logout", function () {
    Auth::logout();
    return redirect("/login");
});
