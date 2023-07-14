<?php

use App\Http\Controllers\HiraganaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KanjiController;
use App\Http\Controllers\KatakanaController;
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

// Route::get('/', function () {
//     return view('home', [
//         'collection' => ['hiragana', 'katakana', 'kanji']
//     ])->name('home');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('hiragana', HiraganaController::class);
Route::resource('katakana', KatakanaController::class);
Route::resource('kanji', KanjiController::class);

Route::fallback(function(){ return view('lostpage');});