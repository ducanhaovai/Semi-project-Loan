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
        // Route::get('/index', '\App\Http\Controllers\Admin\AdminController@index');
        Route::get('/index', '\App\Http\Controllers\Admin\RoomController@index');
        
        Route::get('/room', '\App\Http\Controllers\Admin\RoomController@index')->name('room');
        Route::get('/room/create', '\App\Http\Controllers\Admin\RoomController@create')->name('room.form');
        Route::post('/room/create', '\App\Http\Controllers\Admin\RoomController@store')->name('room.store');
        Route::get('/room/{id}/edit',  '\App\Http\Controllers\Admin\RoomController@edit')->name('room.edit');
        Route::post('/room/{id}/edit',  '\App\Http\Controllers\Admin\RoomController@update')->name('room.update');
        Route::get('/room/{id}/delete',  '\App\Http\Controllers\Admin\RoomController@destroy')->name('room.delete');
        Route::get('/room/{id}',  '\App\Http\Controllers\Admin\RoomController@show')->name('room.detail');

        // Route::get('/{path?}', function($path = null){
        //     return View::make('admin.index');
        // })->where('path', '.*');
    }
);
