<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelperController;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\MoleculeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StockController;

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

    // helper //
    Route::get('/helper/product/', 'App\Http\Controllers\HelperController@products');
    // end helper //

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

    // manufacturer //
    Route::get('/manufacturer/', [ManufacturerController::class, 'index'])->name('manufacturer.index');
    Route::get('/manufacturer/create/', [ManufacturerController::class, 'create'])->name('manufacturer.create');
    Route::post('/manufacturer/create/', [ManufacturerController::class, 'store'])->name('manufacturer.save');
    Route::get('/manufacturer/edit/{id}/', [ManufacturerController::class, 'edit'])->name('manufacturer.edit');
    Route::put('/manufacturer/edit/{id}/', [ManufacturerController::class, 'update'])->name('manufacturer.update');
    Route::delete('/manufacturer/delete/{id}/', [ManufacturerController::class, 'destroy'])->name('manufacturer.delete');
    // end manufacturer //

    // category //
    Route::get('/category/', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create/', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/create/', [CategoryController::class, 'store'])->name('category.save');
    Route::get('/category/edit/{id}/', [CategoryController::class, 'edit'])->name('category.edit');
    Route::put('/category/edit/{id}/', [CategoryController::class, 'update'])->name('category.update');
    Route::delete('/category/delete/{id}/', [CategoryController::class, 'destroy'])->name('category.delete');
    // end category //

    // subcategory //
    Route::get('/subcategory/', [SubcategoryController::class, 'index'])->name('subcategory.index');
    Route::get('/subcategory/create/', [SubcategoryController::class, 'create'])->name('subcategory.create');
    Route::post('/subcategory/create/', [SubcategoryController::class, 'store'])->name('subcategory.save');
    Route::get('/subcategory/edit/{id}/', [SubcategoryController::class, 'edit'])->name('subcategory.edit');
    Route::put('/subcategory/edit/{id}/', [SubcategoryController::class, 'update'])->name('subcategory.update');
    Route::delete('/subcategory/delete/{id}/', [SubcategoryController::class, 'destroy'])->name('subcategory.delete');
    // end subcategory //

    // molecule //
    Route::get('/molecule/', [MoleculeController::class, 'index'])->name('molecule.index');
    Route::get('/molecule/create/', [MoleculeController::class, 'create'])->name('molecule.create');
    Route::post('/molecule/create/', [MoleculeController::class, 'store'])->name('molecule.save');
    Route::get('/molecule/edit/{id}/', [MoleculeController::class, 'edit'])->name('molecule.edit');
    Route::put('/molecule/edit/{id}/', [MoleculeController::class, 'update'])->name('molecule.update');
    Route::delete('/molecule/delete/{id}/', [MoleculeController::class, 'destroy'])->name('molecule.delete');
    // end molecule //

    // product //
    Route::get('/product/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/product/create/', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/create/', [ProductController::class, 'store'])->name('product.save');
    Route::get('/product/edit/{id}/', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/product/edit/{id}/', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/product/delete/{id}/', [ProductController::class, 'destroy'])->name('product.delete');
    // end product //

    // stock //
    Route::get('/stock/', [StockController::class, 'index'])->name('stock.index');
    Route::get('/stock/create/', [StockController::class, 'create'])->name('stock.create');
    Route::post('/stock/create/', [StockController::class, 'store'])->name('stock.save');
    Route::get('/stock/edit/{id}/', [StockController::class, 'edit'])->name('stock.edit');
    Route::put('/stock/edit/{id}/', [StockController::class, 'update'])->name('stock.update');
    Route::delete('/stock/delete/{id}/', [StockController::class, 'destroy'])->name('stock.delete');
    // end stock //

});
