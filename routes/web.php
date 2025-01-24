<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/',[App\Http\Controllers\FrontEnd\HomeController::class,'index']);
Route::get('/contact',[App\Http\Controllers\FrontEnd\HomeController::class,'contact']);
Route::get('/blog',[App\Http\Controllers\FrontEnd\HomeController::class,'blog']);
// Route::get('/blogs.blog-left-sidebar',[App\Http\Controllers\BackEnd\BlogController::class,'blog_left']);
// Route::get('/blogs.blog-right-sidebar',[App\Http\Controllers\BackEnd\BlogController::class,'blog_right']);

//new page should go here.

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resources([
    'getServices' => \App\Http\Controllers\BackEnd\ServiceController::class,
]);
Route::resources([
    'getBlogs' => \App\Http\Controllers\BackEnd\BlogController::class,
]);