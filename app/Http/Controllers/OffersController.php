<?php

namespace App\Http\Controllers;

use App\Models\Room;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms_offered = Room::where('offer', 1)->get();

        $max_ammount = count(Room::all());
        $first_room_id = rand(1, $max_ammount);
        $second_room_id = rand(1, $max_ammount);
        $third_room_id = rand(1, $max_ammount);
        $rooms_suggested = Room::where('id', $first_room_id)->orWhere('id', $second_room_id)->orWhere('id', $third_room_id)->get();
        $rooms = [$rooms_offered, $rooms_suggested];

        return view('offers', compact('rooms'));
    }
}
