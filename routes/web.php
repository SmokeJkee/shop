<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Category\CreateController;
use App\Http\Controllers\Category\DeleteController;
use App\Http\Controllers\Category\EditController;
use App\Http\Controllers\Category\IndexController;
use App\Http\Controllers\Category\ShowController;
use App\Http\Controllers\Category\StoreController;
use App\Http\Controllers\Category\UpdateController;
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

Route::get('/adm', AdminController::class)->name('main.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'categories'], function () {
    Route::get('/', IndexController::class)->name('categories.index');
    Route::get('/create', CreateController::class)->name('categories.create');
    Route::post('/', StoreController::class)->name('categories.store');
    Route::get('/{category}', ShowController::class)->name('categories.show');
    Route::get('/{category}/edit', EditController::class)->name('categories.edit');
    Route::patch('/{category}', UpdateController::class)->name('categories.update');
    Route::delete('/{category}', DeleteController::class)->name('categories.delete');
});



