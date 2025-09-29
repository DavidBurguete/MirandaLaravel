<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

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
}
