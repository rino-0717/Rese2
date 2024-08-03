<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use Illuminate\Http\Request;
use App\Models\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function store(ReservationRequest $request)
    {
        // 予約の保存
        Reservation::create([
            'date' => $request['date'],
            'time' => $request['time'],
            'number_of_people' => $request['number_of_people'],
            'user_id' => Auth::id(),
            'shop_id' => $request['shop_id'],
        ]);

        return view('done');
    }

    public function destroy($id)
    {
        $reservation = Reservation::findOrFail($id);
        $reservation->delete();

        return redirect()->route('mypage')->with('success', '予約が削除されました。');
    }
}






