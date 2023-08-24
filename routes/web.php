<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'App\Http\Controllers\FoodController@listFood');
Route::get('/foods/{id}', 'FoodController@detailFood')->name('detail');

Route::resource('food',App\Http\Controllers\FoodController::class)->middleware('auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::resource('/category', App\Http\Controllers\CategoryController::class);
Route::get('/foods/{id}','App\Http\Controllers\FoodController@detailFood')->name('detail');