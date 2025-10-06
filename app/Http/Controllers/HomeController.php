<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class HomeController extends Controller
{
    /**
     * Displays the home.
     */
    public function index()
    {
        return view('home', ['rooms' => Room::
            where("id", 10)->
            orWhere("id", 5)->
            orWhere("id", 18)->
            orWhere("id", 26)->
            orWhere("id", 27)->
            orWhere("id", 14)->
            orWhere("id", 3)->get()]);
    }

    public function filter(Request $request)
    {
        try{
            $validate = $request->validate([
                "real_check_in" => "required|date",
                "real_check_out" => "required|date"
            ]);
        }
        catch(Throwable $err){
            $rooms = Room::
                where("id", 10)->
                orWhere("id", 5)->
                orWhere("id", 18)->
                orWhere("id", 26)->
                orWhere("id", 27)->
                orWhere("id", 14)->
                orWhere("id", 3)->get();
            return view("home", compact("rooms", "err"));
        }
        $start_date = $request->real_check_in;
        $end_date = $request->real_check_out;
        $booked = Booking::select("room_id")->
            whereRaw("(`check_in_date` <= ? AND `check_out_date` >= ?)".
                " OR (`check_in_date` <= ? AND `check_out_date` >= ?)", 
                [$start_date, $start_date, $end_date, $end_date])->
            groupBy("room_id")->get();
        
        $rooms = Room::whereNotIn("id", $booked)->get();
        $amount_rooms = Room::whereNotIn("id", $booked)->count();
        return view('rooms.index', compact('rooms', 'amount_rooms'));
    }
}
