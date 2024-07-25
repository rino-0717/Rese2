<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReservationRequest;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        $user = Auth::user();
        // バリデーション
        $request->validate([
            'shop_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required',
            'number_of_people' => 'required|integer',
        ]);

        // 予約の保存
        $reservation = $user->reservations()->create([
            'shop_id' => $request->shop_id,
            'date' => $request->date,
            'time' => $request->time,
            'number_of_people' => $request->number_of_people,
        ]);

        // doneビューにリダイレクト
        return redirect()->route('done');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('mypage')->with('success', '予約が削除されました。');
    }
}