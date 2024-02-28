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



Route::get('/', "App\Http\Controllers\Yeni@index");
Route::get('/list', "App\Http\Controllers\Yeni@list");
Route::post('/add', "App\Http\Controllers\Yeni@add")->name("add");
Route::get('/deleteNews/{id}', "App\Http\Controllers\Yeni@deleteNews");
Route::get('/deleteCategory/{id}', "App\Http\Controllers\Yeni@deleteCategory");
Route::get('/categories', "App\Http\Controllers\Yeni@categories")->name("categories");
Route::post('/addCategory', "App\Http\Controllers\Yeni@addCategory")->name("addCategory");
Route::get('/editNews/{id}', "App\Http\Controllers\Yeni@editNews");
Route::post('/updateNews', "App\Http\Controllers\Yeni@updateNews")->name("updateNews");
Route::get('/editCategory/{id}', "App\Http\Controllers\Yeni@editCategory");
Route::post('/updateCategory', "App\Http\Controllers\Yeni@updateCategory")->name("updateCategory");



