<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $shops = Shop::with('likedBy')->get();
        $areas = Shop::select('area')->distinct()->get();
        $genres = Shop::select('genre')->distinct()->get();
        return view('shop', compact('shops', 'areas', 'genres'));
    }

    public function show($id)
    {
        $shop = Shop::findOrFail($id);
        $shops = Shop::all();
        $areas = $shops->pluck('area')->unique();
        $genres = $shops->pluck('genre')->unique();
        $introductions = $shop->introductions;
        return view('detail', [
            'shop' => $shop,
            'shops' => $shops,
            'areas' => $areas,
            'genres' => $genres,
            'introductions' => $introductions,
        ]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        $shops = Shop::where('name', 'LIKE', "%{$query}%")
                    ->orWhere('area', 'LIKE', "%{$query}%")
                    ->orWhere('genre', 'LIKE', "%{$query}%")
                    ->get();

        return view('shop', compact('shops'));
    }
}