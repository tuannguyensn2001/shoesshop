<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 'admin'],function(){
    Route::get('/',[\App\Http\Controllers\Backend\HomeController::class,'index']);
    Route::resource('categories', \App\Http\Controllers\Backend\CategoryController::class);
});
