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


});
