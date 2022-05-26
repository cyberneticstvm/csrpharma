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
    return view('login');
});

Route::post('/', 'App\Http\Controllers\UserController@userlogin')->name('login');

Route::group(['middleware' => ['auth']], function(){
    Route::get('/dash/', function () {
        return view('dash');
    })->name('dash');
    Route::get('/logout/', 'App\Http\Controllers\UserController@userlogout');

    // roles and permissions //
    Route::get('/roles/', 'App\Http\Controllers\RoleController@index')->name('role.index');
    Route::get('/roles/create/', 'App\Http\Controllers\RoleController@create')->name('role.create');;
    Route::post('/roles/create/', 'App\Http\Controllers\RoleController@store')->name('role.save');
    Route::get('/roles/edit/{id}/', 'App\Http\Controllers\RoleController@edit')->name('role.edit');
    Route::put('/roles/edit/{id}/', 'App\Http\Controllers\RoleController@update')->name('role.update');
    Route::delete('/roles/delete/{id}/', 'App\Http\Controllers\RoleController@destroy')->name('role.delete');
    // end roles and permissions //

    // user //
    Route::get('/user/', 'App\Http\Controllers\UserController@index')->name('user.index');
    Route::get('/user/create/', 'App\Http\Controllers\UserController@create')->name('user.create');
    Route::post('/user/create/', 'App\Http\Controllers\UserController@store')->name('user.save');
    Route::get('/user/edit/{id}/', 'App\Http\Controllers\UserController@edit')->name('user.edit');
    Route::put('/user/edit/{id}/', 'App\Http\Controllers\UserController@update')->name('user.update');
    Route::delete('/user/delete/{id}/', 'App\Http\Controllers\UserController@destroy')->name('user.delete');
    // end user //

});
