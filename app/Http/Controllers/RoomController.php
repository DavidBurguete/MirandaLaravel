<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Error;
use Illuminate\Http\Request;
use Throwable;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('rooms.index', ['rooms' => Room::all()]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $room = Room::findOrFail($id);
        return view('rooms.show', compact('room'));
    }

    /**
     * Display the specified resource.
     */
    public function book(string $id, Request $request)
    {
        try{
            $validate = $request->validate([
                "email" => "required|email",
                "real_check_in" => "required|date",
                "real_check_out" => "required|date"
            ]);
        }
        catch(Throwable $err){
            $room = Room::findOrFail($id);
            $room->error = true;
            return view("rooms.show", compact("room", "err"));
        }
        
        $booking = new Booking();
        $booking->client_name = $request->email;
        $booking->room_id = $id;
        $booking->order_date = explode(" ", explode("T", today())[0])[0];
        $booking->check_in_date = $request->real_check_in;
        $booking->check_out_date = $request->real_check_out;
        $booking->special_request = null;
        // Booking::create($booking->toArray());
        return view('rooms.book', compact('booking'));
    }
}
