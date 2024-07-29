<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'shop_id' => 'required|exists:shops,id',
            'date' => 'required|date',
            'time' => 'required',
            'number_of_people' => 'required|integer|min:1',
        ]);

        // 予約の保存
        Reservation::create([
            'shop_id' => $request->shop_id,
            'user_id' => auth()->id(),
            'date' => $request->date,
            'time' => $request->time,
            'number_of_people' => $request->number_of_people,
        ]);

        // doneビューにリダイレクト
        return redirect()->route('done');
    }

    // 完了ページ表示
    public function completePage()
    {
        return view('done');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('mypage')->with('success', '予約が削除されました。');
    }
}