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

use App\Http\Controllers\DrinkController;

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

// 課題１
Route::get("session/save", "DrinksController@saveSession");
