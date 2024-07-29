<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation;
use App\Models\Like;

class MypageController extends Controller
{
    public function myPage()
    {
        $user = Auth::user();
        $reservations = $user->reservations;
        $likes = $user->likes;

        return view('mypage', compact('user', 'reservations', 'likes'));
    }
}