<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MyProfileController
{
    public function index()
    {
        $userId = Auth::user()->id;
        $user = User::find($userId);
        $member = Members::where('user_id', $userId)->first();

        return view('profile.myProfile', [
            'user' => $user,
            'member' => $member
        ]);

    }
    public function edit($id){
        $member = Members::find($id);
        return view('profile.editProfile', compact('member'));

    }
    public function update(Request $request, $id)
    {
        $members = Members::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate(
            [
                'name' => 'required',
                // 'email' => 'nullable|unique:members|' . id,
                'email' => 'nullable|email:rfc,dns|unique:members,email,' . $members->id,
                'phone' => 'nullable|digits_between:9,14|numeric|unique:members,phone,' . $members->id,
                'department' => 'nullable',
                'designation' => 'nullable',
                'workplace' => 'nullable',
                'photo' => 'nullable|mimes:jpg,jpeg,png|max:20048',
            ],
            [
                'name.required' => 'Please Input Name',
                'email.unique' => 'This Email Already Exists',
                'phone.unique' => 'This Phone Number Already Exists',
                'phone.digits_between' => 'Phone Number Must Be Between 9 To 14 Digits',
                'phone.numeric' => 'Phone Number Must Be Numeric',
                'photo.mimes' => 'Photo Must Be jpg,jpeg,png',
                'photo.max' => 'Photo Must Be Less Than 20MB',
            ]
        );

        $members->update([
            'name' => $validated['name'] ?? $members->name,
            'email' => $validated['email'] ?? $members->email,
            'phone' => $validated['phone'] ?? $members->phone,
            'department' => $validated['department'] ?? $members->department,
            'designation' => $validated['designation'] ?? $members->designation,
            'workplace' => $validated['workplace'] ?? $members->workplace,
            'photo' => $last_thumb ?? $members->photo,
        ]);

        return redirect()->route('myProfile')->with('update', 'Member Updated Successfully');
    }
}
