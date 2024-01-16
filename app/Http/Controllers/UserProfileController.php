<?php

namespace App\Http\Controllers;

use App\Models\ProfileImage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
            'picture' => "nullable|image|mimes:png,jpeg,jpg,gif|max:2028"
        ]);

        if ($request->hasFile('picture')) {
            // Update with a file
            $file = $request->file('picture');
            $ext = $file->extension();
            $file_new_name =  'display_picture_' . time() . '.' . $ext;

            $file->move(public_path("uploads"), $file_new_name);

            $path = "uploads/" . $file_new_name;

            if (auth()->user()->dp) {
                $oldPicture = auth()->user()->dp->path;
            }

            User::where('id', auth()->user()->id)->update([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number')
            ]);

            ProfileImage::updateOrCreate(
                ['user_id' => auth()->user()->id],
                [

                    'user_id' => auth()->user()->id,
                    'path' => $path
                ]
            );

            if (isset($oldPicture)) {
                if (File::exists(public_path($oldPicture))) {
                    File::delete(public_path($oldPicture));
                }
            }
        } else {
            // Update with no file
            User::where('id', auth()->user()->id)->update([
                'name' => $request->input('name'),
                'phone_number' => $request->input('phone_number')
            ]);
        }


        return back()->with('success', "Profile Updated");
    }
}
