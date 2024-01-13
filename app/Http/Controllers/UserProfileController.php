<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function view_profile()
    {
        return view('users.profile');
    }
}
