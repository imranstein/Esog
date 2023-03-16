<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Members;
use App\Models\User;
use App\Notifications\UserRegistered;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MemberController extends Controller
{
    public function index()
    {
        $members = Members::where('is_active', 1)->paginate(12);
        return view('Front.memberList', compact('members'));
    }
    public function create()
    {
        return view('Front.memberRegister');
    }

    public function store(Request $request)
    {
        // dd($request->image);
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate(
            [
                'name' => 'required',
                'email' => 'nullable|unique:members|',
                'phone' => 'nullable|unique:members|digits_between:9,14|numeric',
                'department' => 'nullable',
                'designation' => 'nullable',
                'workplace' => 'nullable',
                'image' => 'nullable|max:20048',

            ],
            [
                'name.required' => 'Please Input Name',
                'email.unique' => 'This Email Already Exists',
                'phone.unique' => 'This Phone Number Already Exists',
                'phone.digits_between' => 'Phone Number Must Be Between 9 To 14 Digits',
                'phone.numeric' => 'Phone Number Must Be Numeric',
                'image.mimes' => 'Image Must Be jpg,jpeg,png',
                'image.max' => 'Image Must Be Less Than 20MB',
            ]
        );

        $members = Members::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'department' => $validated['department'] ?? null,
            'designation' => $validated['designation'] ?? null,
            'workplace' => $validated['workplace'],
            'photo' => $last_thumb ?? null,
        ]);

        // $admins = User::role('Admin')->get();
        // foreach ($admins as $admin) {
        //     $admin->notify(new UserRegistered);
        // }


        $firstName = explode(' ', $validated['name'])[0];
        $lastName = explode(' ', $validated['name'])[1] ?? null;
        $email = $validated['email'];
        $id = $members->id;

        // dd($firstName, $lastName, $email);

        return view('Front.memberPay', compact('firstName', 'lastName', 'email', 'id'));

        // return view('Front.memberSuccess');
        // return redirect()->route('member.index')->with('success', 'Member Added Successfully');

    }
    public function isPaid($id)
    {
        $member = Members::findOrFail($id);
        $member->isPaid = now();
        $member->save();

        $admins = User::role('Admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new UserRegistered);
        }
        return view('Front.memberSuccess');
    }
}
