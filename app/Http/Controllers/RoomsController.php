<?php

namespace App\Http\Controllers;

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
        ]);
       

        // return redirect('/create/room');
        // return redirect()->route('admin.room.create');
        return back()->with('success', "Room has been created!");
    }
}
