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

Route::get('/', function () {
    //return view('welcome');
    return "Mi proyectito :D";
});

Route::get('proyectito/test', function () {
    //return view('welcome');
    return "Mi proyectito 2";
});

Route::get('welcome', function () {
    //return view('welcome');
    return view('welcome');
});


