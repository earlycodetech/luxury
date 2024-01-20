<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Rooms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{


    
    public function index()
    {
        $rooms = Rooms::oldest('room_name')->get();
        return view('welcome', compact('rooms'));
    }

    public function show_contact_form()
    {
        return view('contact');
    }


    public function submit_contact_form(Request $request)
    {
        $request->validate([
            'name' => "required|string",
            'email' => "required|email",
            'message' => "required|string"
        ]);


        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];


        Mail::to('emmanuelodobo10@gmail.com')->send(new ContactMail($data));

        return back()->with('success', "Thank you for contacting us");
    }
}
