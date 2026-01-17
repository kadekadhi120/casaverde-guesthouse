<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ReviewController;
use App\Models\Review; // Pastikan Model Review di-import
Route::get('/', function () {
    return view('landingpage');
});



Route::get('/', function () {
    $userReview = null;

    if (Auth::check()) {
        $userReview = Review::where('user_id', Auth::id())->first();
    }
    return view('welcome', compact('userReview'));
});

// Guest Middleware (User yang sudah login tidak bisa akses halaman ini)
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