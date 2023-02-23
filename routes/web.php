<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactUsController;
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

Route::get('/', function () {
    return redirect('https://www.educastudio.com/');
});

Route::prefix('category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'marbelEduGames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'marbelAndFriends']);
    Route::get('/riri-story-books', [ProductController::class, 'ririStoryBooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakKidsSongs']);
});

Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{title}', [NewsController::class, 'show']);

Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

Route::get('/about-us', function () {
    echo "about-us";
});

Route::resource('contact-us', ContactUsController::class)->only(['index', 'store']);

