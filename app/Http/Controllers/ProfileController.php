<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{

    public function index()
    {

        return view('profile');

    }

    public function update(Request $request)
    {

        $user = Auth::user();
        $user->name = $request->name;

        // upload avatar
        if($request->hasFile('avatar'))
        {

            $image = $request->file('avatar');

            $imageName = time().'.'.$image->getClientOriginalExtension();

            $image->move(public_path('avatars'), $imageName);

            $user->avatar = $imageName;

        }

        // update password
        if($request->password)
        {

            $user->password = Hash::make($request->password);

        }

        $user = Auth::user();

        return back();

    }

}