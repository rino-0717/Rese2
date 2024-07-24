<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    // ユーザー新規登録ページ表示
    public function create()
    {
        return view('auth.register');
    }

    // ユーザー新規登録処理
    public function store(RegisterRequest $request)
    {
        // dd('$requestにはどんなデータが入ってる？',$request->all());
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' =>  ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8',],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        // 完了ページへリダイレクト
        return redirect()->route('register.complete');
    }

    // 完了ページ表示
    public function completePage()
    {
        return view('/thanks');
    }
}