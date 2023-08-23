<?php

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

// 補完機能使ったら出てきた部分
// use App\Http\Controllers\DrinkController;
// use Illuminate\Routing\Route;　←こいつがあると「"Method Illuminate\Routing\Route::get does not exist."」というエラーが起こる
// use Illuminate\Support\Facades\Route; ←に書き換えること↑が解決する。

Route::get('/', function () {
    return view('welcome');
});

Route::get("drinks","DrinksController@index");
Route::get("requestForm", "RequestFormController@form");

// POST通信
Route::post("showRequest", "RequestFormController@postRequest");

// GET通信
Route::get("showRequest", "RequestFormContropler@getRequest");

// 設問４
Route::get("showAllRequest", "RequestFormController@showAllRequest");

// 設問５
Route::post("delete", "DrinksController@cookiedelete");

// session
// 課題１
Route::get("session/save", "DrinksController@saveSession");

// 課題２
Route::get("session/show", "DrinksController@showSession");

// 課題３
Route::get("session/delete", "DrinksController@deleteSession");
