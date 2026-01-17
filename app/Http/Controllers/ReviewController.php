<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ReviewController extends Controller
{
    public function store(Request $request)
    {
        // 1. Cek apakah user ini sudah pernah review sebelumnya
        $existingReview = Review::where('user_id', Auth::id())->exists();

        if ($existingReview) {
            // Jika sudah ada, kembalikan dengan pesan error khusus
            return back()->with('error', 'Oops! Anda sudah pernah memberikan ulasan sebelumnya.');
        }

        // 2. Validasi Input
        $request->validate([
            'message' => 'required|string|max:500', 
            'rating'  => 'required|integer|min:1|max:5',
        ]);

        // 3. Simpan ke Database
        Review::create([
            'user_id'   => Auth::id(),
            'user_name' => Auth::user()->name,
            'comment'   => $request->message,
            'rating'    => $request->rating,
        ]);

        // 4. Sukses
        return back()->with('success', 'Terima kasih! Ulasan Anda berhasil dikirim.');
    }
}