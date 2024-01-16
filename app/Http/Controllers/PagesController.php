<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $rooms = Rooms::oldest('room_name')->get();
        return view('welcome', compact('rooms'));
    }
}
