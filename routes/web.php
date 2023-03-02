<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/characters', [PageController::class, 'characters'])->name('characters');

// Routes for comics
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
Route::get('/comics/{id}', [ComicController::class, 'show'])->name('comics.show');
Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/fans', [PageController::class, 'fans'])->name('fans');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
