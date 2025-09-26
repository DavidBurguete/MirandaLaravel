<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Displays the home.
     */
    public function index()
    {
        return view('contact');
    }
}
