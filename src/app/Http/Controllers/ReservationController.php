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
        // 予約の保存
        Reservation::create([
            'shop_id' => $request->shop_id,
            'user_id' => auth()->id(),
            'date' => $request->date,
            'time' => $request->time,
            'number_of_people' => $request->number_of_people,
        ]);

        return redirect()->route('done')->with('success', '予約が完了しました。');
    }

    public function done()
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