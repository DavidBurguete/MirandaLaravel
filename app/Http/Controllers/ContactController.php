<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Throwable;

class ContactController extends Controller
{
    /**
     * Displays the home.
     */
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        try{
            $validate = $request->validate([
                "name" => "required|string",
                "phone" => "required|string|min:9",
                "email" => "required|email",
                "subject" => "required|string",
                "message" => "required|string"
            ]);
        }
        catch(Throwable $err)
        {
            $error = $err->getMessage();
            return view("contact", compact("error"));
        }
        $response = Http::post("https://y1y87ld8qh.execute-api.eu-west-3.amazonaws.com/dev/api/v1/send-message", [
            "name" => $request->name,
            "phone" => $request->phone,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message
        ]);
        $success = "Thank your for reaching to us!\\nWe will try to answer you as soon as posible";
        return view("contact", compact("success"));
    }
}
