<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Shop;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        // ユーザーの予約を取得
        $reservations = Reservation::where('user_id', $user->id)->get();
        // ユーザーのお気に入り店舗を取得
        $favoriteShops = $user->favoriteShops()->get();
        return view('mypage', [
            'user' => $user,
            'reservations' => $reservations,
            'favoriteShops' => $favoriteShops,
        ]);
    }
}