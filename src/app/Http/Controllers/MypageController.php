<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // ここで予約情報やお気に入り店舗の取得ロジックを実装します
        // 例：
        // $reservations = $user->reservations;
        // $favoriteShops = $user->favoriteShops;

        return view('mypage', [
            'user' => $user,
            // 'reservations' => $reservations,
            // 'favoriteShops' => $favoriteShops,
        ]);
    }
}