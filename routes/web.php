<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\FoodsController;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [PagesController::class, 'index']);
Route::get('/about', [PagesController::class,'about']);
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/about', [ProductController::class, 'about']);
Route::get('/products/{id}', [ProductController::class, 'detail'])->where('id', '[0-9]+');

Route::get('/posts',[PostsController::class,'index']);

Route::resource('/foods', FoodsController::class);
//
//Route::get('/hello', function () {
//    return env('MY_NAME');
//});
//Route::get('/json', function () {
//    return response()->json(['name' => 'david']);
//});
//
//Route::get('/re', function(){
//    return redirect('/hello');
//});
//
//Route::get('/home',function(){
//    return view('home');
//});


