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
    return view('welcome');
});

Route::get('/home',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact']);
Route::get('/services',[App\Http\Controllers\ServiceController::class,'index']);

//new page should go here.
