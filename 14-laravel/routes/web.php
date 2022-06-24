<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redirect;

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
    'categories' => \App\Http\Controllers\CategoryController::class,
    'games' => \App\Http\Controllers\GameController::class
]);

/* Language Toggle */
Route::get('locale/{locale}', function ($locale){
    session()->put('locale', $locale);
    return Redirect::back();
});

/* Search */
Route::post('users/search', [\App\Http\Controllers\UserController::class, 'search']);
Route::post('categories/search', [\App\Http\Controllers\CategoryController::class, 'search']);

/* Export */
Route::get('export/users/pdf', [\App\Http\Controllers\UserController::class, 'pdf']);
Route::get('export/users/excel', [\App\Http\Controllers\UserController::class, 'excel']);
Route::get('export/categories/pdf', [\App\Http\Controllers\CategoryController::class, 'pdf']);
Route::get('export/categories/excel', [\App\Http\Controllers\CategoryController::class, 'excel']);

/* Import */
Route::post('import/users', [\App\Http\Controllers\UserController::class, 'import']);
Route::post('import/categories', [\App\Http\Controllers\CategoryController::class, 'import']);
