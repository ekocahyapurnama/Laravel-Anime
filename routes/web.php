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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('/user', [App\Http\Controllers\AdminController::class, 'user']);

Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'index']);
Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'anime']);
Route::get('/tambahanime', [App\Http\Controllers\AnimeController::class, 'create']);
Route::post('/anime/store', [App\Http\Controllers\AnimeController::class, 'store']);

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index']);
Route::get('/genre', [App\Http\Controllers\GenreController::class, 'genre']);
Route::get('/tambahgenre', [App\Http\Controllers\GenreController::class, 'tambah']);
Route::post('/genre/store', [App\Http\Controllers\GenreController::class, 'store']);

Route::get('/studio', [App\Http\Controllers\StudioController::class, 'index']);
Route::get('/studio', [App\Http\Controllers\StudioController::class, 'studio']);
Route::get('/tambahstudio', [App\Http\Controllers\StudioController::class, 'tambah']);
Route::post('/studio/store', [App\Http\Controllers\StudioController::class, 'store']);

Route::get('/pengunjung', function () { return view('home'); })->middleware(['checkRole:pegunjung,admin']);

