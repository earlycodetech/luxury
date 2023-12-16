<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create()
    {
        return view('rooms.create');
    }

    public function store(Request $request) {
        $request->validate([
            'room_name' => "required|string|max:100",
            'available_rooms' => "required|numeric|min:1",
            'room_price' => "required|numeric|min:5000",
            'room_details' => "required|string|max:255",
        ]);
       
        Rooms::create([
            'room_name' => $request->input('room_name'),
            'room_details' => $request->input('room_details'),
            'available_rooms' => $request->input('available_rooms'),
            'room_price' =>  $request->input('room_price')
        ]);

        // return redirect('/create/room');
        // return redirect()->route('admin.room.create');
        return back()->with('success', "Room has been created!");
    }
}
