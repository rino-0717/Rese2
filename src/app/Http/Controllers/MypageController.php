<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reservations = $user->reservations;
        $likes = $user->likes;
        return view('mypage', [
            'user' => $user,
            // 他の必要なデータをここに追加
        ]);
    }
}