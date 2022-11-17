<?php

use App\Http\Controllers\AdminController;


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

Route::get('/', AdminController::class)->name('main.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'categories', 'namespace' => 'App\Http\Controllers\Category'], function () {
    Route::get('/', IndexController::class)->name('categories.index');
    Route::get('/create', CreateController::class)->name('categories.create');
    Route::post('/', StoreController::class)->name('categories.store');
    Route::get('/{category}', ShowController::class)->name('categories.show');
    Route::get('/{category}/edit', EditController::class)->name('categories.edit');
    Route::patch('/{category}', UpdateController::class)->name('categories.update');
    Route::delete('/{category}', DeleteController::class)->name('categories.delete');
});

Route::group(['prefix' => 'tags', 'namespace' => 'App\Http\Controllers\Tag'], function () {
    Route::get('/', IndexController::class)->name('tags.index');
    Route::get('/create', CreateController::class)->name('tags.create');
    Route::post('/', StoreController::class)->name('tags.store');
    Route::get('/{tag}', ShowController::class)->name('tags.show');
    Route::get('/{tag}/edit', EditController::class)->name('tags.edit');
    Route::patch('/{tag}', UpdateController::class)->name('tags.update');
    Route::delete('/{tag}', DeleteController::class)->name('tags.delete');
});


Route::group(['prefix' => 'colors', 'namespace' => 'App\Http\Controllers\Color'], function () {
    Route::get('/', IndexController::class)->name('colors.index');
    Route::get('/create', CreateController::class)->name('colors.create');
    Route::post('/', StoreController::class)->name('colors.store');
    Route::get('/{user}', ShowController::class)->name('colors.show');
    Route::get('/{color}/edit', EditController::class)->name('colors.edit');
    Route::patch('/{color}', UpdateController::class)->name('colors.update');
    Route::delete('/{color}', DeleteController::class)->name('colors.delete');
});

Route::group(['prefix' => 'users', 'namespace' => 'App\Http\Controllers\User'], function () {
    Route::get('/', IndexController::class)->name('users.index');
    Route::get('/create', CreateController::class)->name('users.create');
    Route::post('/', StoreController::class)->name('users.store');
    Route::get('/{user}', ShowController::class)->name('users.show');
    Route::get('/{user}/edit', EditController::class)->name('users.edit');
    Route::patch('/{user}', UpdateController::class)->name('users.update');
    Route::delete('/{user}', DeleteController::class)->name('users.delete');
});


