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
Route::get('/tambahuser', [App\Http\Controllers\AdminController::class, 'create']);
Route::post('/user/store', [App\Http\Controllers\AdminController::class, 'store']);
Route::get('/useredit/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit']);
Route::post('/user/update', [App\Http\Controllers\AdminController::class, 'update']);
Route::get('/user/hapus/{id}', [App\Http\Controllers\AdminController::class, 'hapus']);

Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'index']);
Route::get('/anime', [App\Http\Controllers\AnimeController::class, 'anime']);
Route::get('/tambahanime', [App\Http\Controllers\AnimeController::class, 'create']);
Route::post('/anime/store', [App\Http\Controllers\AnimeController::class, 'store']);
Route::get('/animeedit/edit/{id}', [App\Http\Controllers\AnimeController::class, 'edit']);
Route::post('/anime/update', [App\Http\Controllers\AnimeController::class, 'update']);
Route::get('/anime/hapus/{id}', [App\Http\Controllers\AnimeController::class, 'hapus']);
Route::get('/anime/cari', [App\Http\Controllers\AnimeController::class, 'cari']);
Route::get('/cetakanime', [App\Http\Controllers\AnimeController::class, 'cetak']);

Route::get('/genre', [App\Http\Controllers\GenreController::class, 'index']);
Route::get('/genre', [App\Http\Controllers\GenreController::class, 'genre']);
Route::get('/tambahgenre', [App\Http\Controllers\GenreController::class, 'tambah']);
Route::post('/genre/store', [App\Http\Controllers\GenreController::class, 'store']);
Route::get('/genreedit/edit/{id}', [App\Http\Controllers\GenreController::class, 'edit']);
Route::post('/genre/update', [App\Http\Controllers\GenreController::class, 'update']);
Route::get('/genre/hapus/{id}', [App\Http\Controllers\GenreController::class, 'hapus']);

Route::get('/studio', [App\Http\Controllers\StudioController::class, 'index']);
Route::get('/studio', [App\Http\Controllers\StudioController::class, 'studio']);
Route::get('/tambahstudio', [App\Http\Controllers\StudioController::class, 'tambah']);
Route::post('/studio/store', [App\Http\Controllers\StudioController::class, 'store']);
Route::get('/studioedit/edit/{id}', [App\Http\Controllers\StudioController::class, 'edit']);
Route::post('/studio/update', [App\Http\Controllers\StudioController::class, 'update']);
Route::get('/studio/hapus/{id}', [App\Http\Controllers\StudioController::class, 'hapus']);

Route::get('/pengunjung', function () { return view('home'); })->middleware(['checkRole:pegunjung,admin']);

