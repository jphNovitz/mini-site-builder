<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $request->input('email'))->first();

        Log::info('login debug', [
            'email' => $request->input('email'),
            'email_length' => strlen((string) $request->input('email')),
            'password_length' => strlen((string) $request->input('password')),
            'user_found' => (bool) $user,
            'hash_ok' => $user ? Hash::check((string) $request->input('password'), $user->password) : null,
            'intended' => session('url.intended'),
        ]);

        if (auth()->attempt($credentials)) {
            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
