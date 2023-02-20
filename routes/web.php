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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});


Route::group(['prefix' => 'admin'], function () {
        // Route::get("/", "TwoFaceAuthsController@index")->name("2fa_setting");
        Route::get('/index', function () {
            return view('admin.index');
        });
        Route::get('/room', function () {
            return view('admin.room.list');
        })->name('admin.room');
        
        Route::get('/room/form', function () {
            return view('admin.room.form');
        })->name('admin.form');
        Route::get('/room/{id}', function () {
            return view('admin.room.detail');
        })->name('admin.detail');
        // Route::get('/{path?}', function($path = null){
        //     return View::make('admin.index');
        // })->where('path', '.*');
    }
);
