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

Route::get('/home',[App\Http\Controllers\FrontEnd\HomeController::class,'index']);
Route::get('/contacts.contactpage',[App\Http\Controllers\FrontEnd\HomeController::class,'contact']);
Route::get('/blogs.blogpage',[App\Http\Controllers\BlogController::class,'index']);
Route::get('/blogs.blog-left-sidebar',[App\Http\Controllers\BlogController::class,'blog_left']);
Route::get('/blogs.blog-right-sidebar',[App\Http\Controllers\BlogController::class,'blog_right']);

//new page should go here.
