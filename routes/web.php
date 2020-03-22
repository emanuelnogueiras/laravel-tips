<?php

use Illuminate\Support\Facades\Route;

Route::get('/', "HomeController@index");
Route::get("/tips/{tip}", "HomeController@showTip");