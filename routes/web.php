<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\TanamanSelatanController;
use App\Http\Controllers\TanamanUtaraController;
use App\Http\Controllers\VidioController;
use App\Models\ArtikelModel;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    $title = 'Landing Page';
    return view('pages.user.home', compact('title'));
});

Route::get('/vidio-user', [VidioController::class, 'vidio'])->name('vidio-user');
Route::get('/vidio-user/{id}', [VidioController::class, 'show'])->name('vidio-detail');

Route::get('/artikel-user', [ArtikelController::class, 'artikel'])->name('artikel-user');
Route::get('/artikel-user/{id}', [ArtikelController::class, 'show'])->name('artikel-detail');

Route::get('/tanaman-selatan-user', [TanamanSelatanController::class, 'tanaman_selatan_user'])->name('tanaman-selatan-user');
Route::get('/tanaman-utara-user', [TanamanUtaraController::class, 'tanaman_utara_user'])->name('tanaman-utara-user');

Route::get('/tanaman-selatan-user/{id}', [TanamanSelatanController::class, 'show'])->name('tanaman-selatan-detail');
Route::get('/tanaman-utara-user/{id}', [TanamanUtaraController::class, 'show'])->name('tanaman-utara-detail');

Route::middleware(['auth'])->group(function () {
    Route::prefix('tanaman-selatan')->group(function () {
        Route::get('/', [TanamanSelatanController::class, 'index'])->name('tanaman-selatan');
        Route::get('/create', [TanamanSelatanController::class, 'create'])->name('tanaman-selatan-create');
        Route::get('/{id}/edit', [TanamanSelatanController::class, 'edit'])->name('tanaman-selatan-edit');
        Route::post('/store', [TanamanSelatanController::class, 'store'])->name('tanaman-selatan-store');
        Route::put('/{id}/update', [TanamanSelatanController::class, 'update'])->name('tanaman-selatan-update');
        Route::delete('/{id}/destroy', [TanamanSelatanController::class, 'destroy'])->name('tanaman-selatan-hapus');
    });

    Route::prefix('vidio')->group(function () {
        Route::get('/', [VidioController::class, 'index'])->name('vidio');
        Route::get('/create', [VidioController::class, 'create'])->name('vidio-create');
        Route::get('/{id}/edit', [VidioController::class, 'edit'])->name('vidio-edit');
        Route::post('/store', [VidioController::class, 'store'])->name('vidio-store');
        Route::put('/{id}/update', [VidioController::class, 'update'])->name('vidio-update');
        Route::delete('/{id}/destroy', [VidioController::class, 'destroy'])->name('vidio-hapus');
    });

    Route::prefix('artikel')->group(function () {
        Route::get('/', [ArtikelController::class, 'index'])->name('artikel');
        Route::get('/create', [ArtikelController::class, 'create'])->name('artikel-create');
        Route::get('/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel-edit');
        Route::post('/store', [ArtikelController::class, 'store'])->name('artikel-store');
        Route::put('/{id}/update', [ArtikelController::class, 'update'])->name('artikel-update');
        Route::delete('/{id}/destroy', [ArtikelController::class, 'destroy'])->name('artikel-hapus');
    });

    Route::prefix('tanaman-utara')->group(function () {
        Route::get('/', [TanamanUtaraController::class, 'index'])->name('tanaman-utara');
        Route::get('/create', [TanamanUtaraController::class, 'create'])->name('tanaman-utara-create');
        Route::get('/{id}/edit', [TanamanUtaraController::class, 'edit'])->name('tanaman-utara-edit');
        Route::post('/store', [TanamanUtaraController::class, 'store'])->name('tanaman-utara-store');
        Route::put('/{id}/update', [TanamanUtaraController::class, 'update'])->name('tanaman-utara-update');
        Route::delete('/{id}/destroy', [TanamanUtaraController::class, 'destroy'])->name('tanaman-utara-hapus');
    });


    Route::prefix('forum')->group(function () {
        Route::get('/', [ForumController::class, 'index'])->name('forum');
        Route::get('/create', [ForumController::class, 'create'])->name('forum-create');
        Route::get('/{id}/edit', [ForumController::class, 'edit'])->name('forum-edit');
        Route::get('/{id}', [ForumController::class, 'show'])->name('forum-show');
        Route::post('/store', [ForumController::class, 'store'])->name('forum-store');
        Route::put('/{id}/update', [ForumController::class, 'update'])->name('forum-update');
        Route::delete('/{id}/destroy', [ForumController::class, 'destroy'])->name('forum-hapus');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
