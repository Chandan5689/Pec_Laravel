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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[App\Http\Controllers\HomeController::class,'index']);
Route::get('/contact',[App\Http\Controllers\HomeController::class,'contact']);
Route::get('/services',[App\Http\Controllers\ServiceController::class,'index']);
Route::get('/blogs.blog-no-sidebar',[App\Http\Controllers\BlogController::class,'index']);
Route::get('/blogs.blog-left-sidebar',[App\Http\Controllers\BlogController::class,'blog_left']);
Route::get('/blogs.blog-right-sidebar',[App\Http\Controllers\BlogController::class,'blog_right']);

//new page should go here.
