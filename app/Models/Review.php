<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // Sesuaikan dengan nama kolom di migration Anda
    protected $fillable = [
        'user_name',
        'user_id',
        'comment',
        'rating',
    ];

    // (Opsional) Relasi ke User jika nanti butuh data user lengkap
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}