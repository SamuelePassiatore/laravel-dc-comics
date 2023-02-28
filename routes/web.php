<?php

use App\Http\Controllers\PageController;
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
Route::get('/comics', [PageController::class, 'comics'])->name('comics');
Route::get('/movies', [PageController::class, 'movies'])->name('movies');
Route::get('/tv', [PageController::class, 'tv'])->name('tv');
Route::get('/games', [PageController::class, 'games'])->name('games');
Route::get('/collectibles', [PageController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [PageController::class, 'videos'])->name('videos');
Route::get('/fans', [PageController::class, 'fans'])->name('fans');
Route::get('/news', [PageController::class, 'news'])->name('news');
Route::get('/shop', [PageController::class, 'shop'])->name('shop');
