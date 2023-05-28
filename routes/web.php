<?php

use App\Http\Controllers\LoginController;
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

Route::get("/login",[
    "as"=>"login",
    "uses"=>"App\Http\Controllers\LoginController@show"
]);
Route::post("/login",[
    "as"=>"login",
    "uses"=>"App\Http\Controllers\LoginController@handle"
]);
Route::post("/handle",[
    "as"=>"handle",
    "uses"=>"App\Http\Controllers\LoginController@handle"
]);
Route::get("/logout",[
    "as"=>"logout",
    "uses"=>"App\Http\Controllers\LoginController@logout"
]);
Route::get("dashboard",[
    "as"=>"dashboard",
    "uses"=>"App\Http\Controllers\LoginController@dash"
]);
