<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\CategoryController;
use \App\Http\Controllers\CategoryProductController;

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
    return view('welcome');
});


Route::resource('category', CategoryController::class);
//Route::prefix('cat')->group(function () {
//    Route::get('/', [CategoryController::class, 'index'])->name('category.index');
//    Route::get('create', [CategoryController::class, 'create'])->name('category.create');
//    Route::post('store', [CategoryController::class, 'store'])->name('category.store');
//
//});


Route::resource('pc', CategoryProductController::class);


//Route::prefix('pc')->group(function () {
//    Route::get('create', [ProductCatalogueController::class, 'create'])->name('pc.create');
//    Route::post('store', [ProductCatalogueController::class, 'create'])->name('pc.store');
//    Route::get('edit', [ProductCatalogueController::class, 'edit'])->name('pc.edit');
//    Route::post('update', [ProductCatalogueController::class, 'update'])->name('pc.update');
//    Route::post('delete', [ProductCatalogueController::class, 'delete'])->name('pc.delete');
//});



