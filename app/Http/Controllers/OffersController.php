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
        return view('offers', ['rooms' => Room::where('offer', 1)->get()]);
    }
}
