<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    // public function changepass()
    // {

    //     return view('profile.change_pass');
    // }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('front.index');
    }
    public function passwordUpdate(Request $request)
    {
        $validateData = $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed|min:6|different:old_password|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/',
            'password_confirmation' => 'required',

        ], [
            'old_password.required' => 'Please Enter Current Password',
            'password.required' => 'Please Enter New Password',
            'password_confirmation.required' => 'Please Enter Confirm Password',
            'password.min' => 'Password must be at least 6 characters',
            'password.confirmed' => 'Password does not match the confirm password',
            'password.different' => 'New Password cannot be the same as your current password. Please choose a different password.',
            'password.regex' => 'Password must contain at least one uppercase letter, one lowercase letter, and one number.',
        ]);
        $HashedPassword = Auth::user()->password;

        if (Hash::check($request->old_password, $HashedPassword)) {
            $user = User::find(Auth::id());

            $user->password = Hash::make($request->password);
            $user->save();

            // Auth::logout();
            return redirect()->route('front.index')->with('success', 'Password Changed Successfully');
        } else {
            return redirect()->back()->with('delete', 'Current Password is Incorrect');
        }
    }
}
