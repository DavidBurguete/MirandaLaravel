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
        $rooms = Room::all();
        $amount_rooms = Room::count();
        return view('rooms.index', compact('rooms', 'amount_rooms'));
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

            $max_ammount = count(Room::all());
            $first_room_id = rand(1, $max_ammount);
            $second_room_id = rand(1, $max_ammount);
            $third_room_id = rand(1, $max_ammount);
            $rooms_suggested = Room::where('id', $first_room_id)->orWhere('id', $second_room_id)->orWhere('id', $third_room_id)->get();
            $rooms = [$room, $rooms_suggested];

            $error = "Something went wrong!";
            if(!isset($request->email)){
                $error = "Please, enter your email";
            }
            return view("rooms.show", compact("rooms", "error"));
        }
        $start_date = $request->real_check_in;
        $end_date = $request->real_check_out;
        $check_if_booked = Booking::whereRaw("((`check_in_date` <= ? AND `check_out_date` >= ?)".
                " OR (`check_in_date` <= ? AND `check_out_date` >= ?)) AND room_id = ?", 
                [$start_date, $start_date, $end_date, $end_date, $id])->get();
        $amount_booked = count($check_if_booked);

        $room = Room::findOrFail($id);
        if($amount_booked != 0){
            $room = Room::findOrFail($id);

            $max_ammount = count(Room::all());
            $first_room_id = rand(1, $max_ammount);
            $second_room_id = rand(1, $max_ammount);
            $third_room_id = rand(1, $max_ammount);
            $rooms_suggested = Room::where('id', $first_room_id)->orWhere('id', $second_room_id)->orWhere('id', $third_room_id)->get();
            $rooms = [$room, $rooms_suggested];

            $error = "We are sorry, but this room has been booked during these days";
            return view("rooms.show", compact("rooms", "error"));
        }
        
        $booking = new Booking();
        $booking->client_name = $request->email;
        $booking->room_id = $id;
        $booking->order_date = explode(" ", explode("T", today())[0])[0];
        $booking->check_in_date = $request->real_check_in;
        $booking->check_out_date = $request->real_check_out;
        $booking->special_request = null;
        Booking::create($booking->toArray());
        Mail::to($request->email)->send(new SendMail($room, $booking));
        $booked_room = [$booking, $room];
        return view('rooms.book', compact('booked_room'));
    }
}
