<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Banner;

class HomeController extends Controller
{
    public function index()
    {
        $userReview = null;

        if (Auth::check()) {
            $userReview = Review::where('user_id', Auth::id())->first();
        }
        $banner = Banner::latest('id')->first();
        // Ambil semua facilities
        $facilities = Facility::all();

        // Ambil review terbaru, misal 10 terakhir
        $reviewsFromDB = Review::latest()->take(10)->get();

        if ($reviewsFromDB->count() < 4) {
            $reviews = $reviewsFromDB->merge($reviewsFromDB)->merge($reviewsFromDB)->merge($reviewsFromDB);
        } else {
            $reviews = $reviewsFromDB->merge($reviewsFromDB);
        }

        return view('welcome', compact('facilities', 'reviews', 'banner', 'userReview'));
    }
}