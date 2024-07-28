<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
        {
            $credentials = $request->only('email', 'password');

            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }

            return back()->withErrors([
                'email' => 'メールアドレスが一致しません',
                'password' => 'パスワードが一致しません',
            ]);
        }

    public function destroy(Request $request)
    {
        // dd($request);
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.create')->with('status', 'ログアウトしました');
    }
}