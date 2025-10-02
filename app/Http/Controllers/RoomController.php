<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Support\Facades\Mail;
use App\Models\Booking;
use App\Models\Room;
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
        $room_picked = Room::findOrFail($id);

        $max_ammount = count(Room::all());
        $first_room_id = rand(1, $max_ammount);
        $second_room_id = rand(1, $max_ammount);
        $third_room_id = rand(1, $max_ammount);
        $rooms_suggested = Room::where('id', $first_room_id)->orWhere('id', $second_room_id)->orWhere('id', $third_room_id)->get();

        $rooms = [$room_picked, $rooms_suggested];
        return view('rooms.show', compact('rooms'));
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
        Booking::create($booking->toArray());
        $room = Room::findOrFail($id);
        Mail::to($request->email)->send(new SendMail($room, $booking));
        $booked_room = [$booking, $room];
        return view('rooms.book', compact('booked_room'));
    }
}
