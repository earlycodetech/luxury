<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function view_profile()
    {
        return view('users.profile');
    }


    public function update_profile(Request $request)
    {
       $request->validate([
        'name' => "required|string",
        'phone_number' => "required|string",
        'picture' => "nullable|image|mimes:png,jpeg,jpg,gif|max:1028"
       ]);
    }
}
