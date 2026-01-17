<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class AuthController extends Controller
{
    // Tampilkan View Login
    public function showLogin()
    {
        return view('auth.login');
    }

    // Proses Login
    public function processLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Ganti 'dashboard' dengan route tujuan setelah login
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    // Tampilkan View Register
    public function showRegister()
    {
        return view('auth.register');
    }

    // Proses Register
    public function processRegister(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed', // butuh input name="password_confirmation"
        ]);

        $user = User::create([
            'name' => strstr($request->email, '@', true), // Ambil nama dari email sementara
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect('/dashboard');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

public function handleProviderCallback($provider)
    {
        try {
            // PERUBAHAN UTAMA DI SINI: Tambahkan ->stateless()
            $socialUser = Socialite::driver($provider)->stateless()->user();

            // Uncomment baris di bawah ini jika ingin melihat data mentah user (debug)

            $user = User::where('email', $socialUser->getEmail())->first();

            if (!$user) {
                // Jika user baru
                $user = User::create([
                    'name' => $socialUser->getName() ?? $socialUser->getNickname() ?? 'User',
                    'email' => $socialUser->getEmail(),
                    'password' => bcrypt(Str::random(16)),
                    $provider . '_id' => $socialUser->getId(),
                    'role_id' => 2,
                    // Pastikan google_id sudah ada di $fillable pada Model User
                ]);
            } else {
                // Jika user lama, update ID provider
                $user->update([
                    $provider . '_id' => $socialUser->getId(),
                ]);
            }

            Auth::login($user);
            return redirect()->intended('/');

        } catch (\Exception $e) {
            // Tampilkan error di layar agar tahu masalahnya apa
            dd($e->getMessage()); 
            
            // Jika nanti sudah production, ganti baris dd() di atas dengan redirect:
            // return redirect()->route('login')->withErrors(['email' => 'Login gagal.']);
        }
    }
}