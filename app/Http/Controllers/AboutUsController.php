<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    /**
     * Displays the about us page.
     */
    public function index()
    {
        return view('about-us');
    }
}
