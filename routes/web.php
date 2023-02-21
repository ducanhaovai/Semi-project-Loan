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

Route::get('/','\App\Http\Controllers\HomeController@index');
Route::get('/login', function () {
    return view('login');
});


Route::group(['prefix' => 'admin'], function () {
        // Route::get("/", "TwoFaceAuthsController@index")->name("2fa_setting");
        Route::get('/index', '\App\Http\Controllers\Admin\AdminController@index');
        
        Route::get('/room', '\App\Http\Controllers\Admin\RoomController@index')->name('admin.room');
        Route::get('/room/form', '\App\Http\Controllers\Admin\RoomController@create')->name('admin.form');
        Route::get('/room/{id}',  '\App\Http\Controllers\Admin\RoomController@show')->name('admin.detail');
        // Route::get('/{path?}', function($path = null){
        //     return View::make('admin.index');
        // })->where('path', '.*');
    }
);
