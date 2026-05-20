<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request)
{
    return view('profile', [
        'user' => $request->user(),
    ]);
}

    /**
     * Update the user's profile information.
     */
    public function update(Request $request)
{
    $user = $request->user();

    // UPDATE NAME & EMAIL
    $user->name = $request->name;

    // UPLOAD AVATAR
    if($request->hasFile('avatar')){

        $file = $request->file('avatar');

        $filename = time() . '.' . $file->getClientOriginalExtension();

        $file->move(public_path('avatars'), $filename);

        $user->avatar = $filename;
    }


    $user->save();

    return redirect('/profile');
}

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
