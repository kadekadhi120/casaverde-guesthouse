<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth; // <--- TAMBAHKAN INI (PENTING)
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use App\Models\Banner;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// HAPUS ROUTE '/' YANG PERTAMA (YANG HANYA RETURN LANDINGPAGE)
// GUNAKAN SATU SAJA DI BAWAH INI:

// Route::get('/', function () {
//     $userReview = null;

//     if (Auth::check()) {
//         $userReview = Review::where('user_id', Auth::id())->first();
//     }

//     // Ambil banner terbaru
//     $banner = Banner::latest('id')->first();

//     // PERBAIKAN DISINI: Tambahkan 'banner' ke dalam compact
//     return view('welcome', compact('userReview', 'banner'));
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
// Guest Middleware
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'processLogin'])->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'processRegister'])->name('register.process');

    Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider'])->name('social.redirect');
    Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback'])->name('social.callback');
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::post('/reviews', [ReviewController::class, 'store'])
    ->name('reviews.store')
    ->middleware('auth');