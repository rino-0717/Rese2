<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Reservation;
use App\Models\Like;

class MyPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $reservations = $user->reservations;
        $likes = $user->likes;
        return view('mypage', [
            'user' => $user,
            'reservations'=> $reservations,
            'likes'=> $likes,
        ]);
    }
}