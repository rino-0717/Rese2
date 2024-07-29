<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function toggleLike(Request $request, $shopId)
    {
        $user = Auth::user();
        $like = Like::where('user_id', $user->id)->where('shop_id', $shopId)->first();

        if ($like) {
            $like->delete();
            return response()->json(['success' => true, 'liked' => false]);
        } else {
            Like::create(['user_id' => $user->id, 'shop_id' => $shopId]);
            return response()->json(['success' => true, 'liked' => true]);
        }
    }
}