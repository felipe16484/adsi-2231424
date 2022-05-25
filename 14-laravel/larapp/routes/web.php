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
    return view('welcome');
});

Route::get('/examplesblade', function() {
    return view('examples');
});

Auth::routes();

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

/* Crud Users */
Route::resources([
    'users' => \App\Http\Controllers\UserController::class,
    /* 'categories' => \App\Http\Controllers\UserController::class,
    'games' => \App\Http\Controllers\UserController::class */
]);