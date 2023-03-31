<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Members;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Notifications\UserApproved;
use App\Http\Controllers\Controller;
use App\Notifications\UserRegistered;
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
                // name have to be first name and last name
                'firstName' => 'required|max:255',
                'lastName' => 'required|max:255',
                'email' => 'nullable|unique:members|',
                'phone' => 'nullable|unique:members|digits_between:9,14|numeric',
                'department' => 'nullable',
                'designation' => 'nullable',
                'workplace' => 'nullable',
                'image' => 'nullable|max:20048',

            ],
            [
                'firstName.required' => 'First Name Is Required',
                'lastName.required' => 'Last Name Is Required',
                'email.unique' => 'This Email Already Exists',
                'phone.unique' => 'This Phone Number Already Exists',
                'phone.digits_between' => 'Phone Number Must Be Between 9 To 14 Digits',
                'phone.numeric' => 'Phone Number Must Be Numeric',
                'image.mimes' => 'Image Must Be jpg,jpeg,png',
                'image.max' => 'Image Must Be Less Than 20MB',
            ]
        );
        $name = $validated['firstName'] . ' ' . $validated['lastName'];

        $members = Members::create([
            'name' => $name,
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


        $firstName = $validated['firstName'];
        $lastName = $validated['lastName'];
        $email = $validated['email'];
        $id = $members->id;
        $admins = User::role('Admin')->get();
        foreach ($admins as $admin) {
            $admin->notify(new UserRegistered);
        }

        $pass = rand(100000, 999999);
        $user = User::create([
            'name' => $name,
            'email' => $validated['email'],
            'password' => bcrypt($pass),

        ]);
        $memberId = Role::where('name', 'Member')->first();
        $user->assignRole($memberId);

        $members->update([
            'user_id' => $user->id,
            'is_active' => 1,
        ]);

        $user->notify(new UserApproved($pass));

        // dd($firstName, $lastName, $email);

        // return view('Front.memberPay', compact('firstName', 'lastName', 'email', 'id'));

        return view('Front.memberSuccess');
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

    public function paymentSuccess($id, $type)
    {
        if ($type == 'course') {
            $member = Members::findOrFail($id);
            $member->coursePurchased = now();
            $member->payment_type = 'course';
            $member->save();
            $message = "You have successfully purchased the course.You Can Enjoy The Courses Now";
        } elseif ($type == 'yearly') {
            $member = Members::findOrFail($id);
            $member->isPaid = now();
            $member->payment_type = 'yearly';
            $member->save();
            $message = "You have successfully paid the yearly membership fee.";
        } elseif ($type == 'life') {
            $member = Members::findOrFail($id);
            $member->isPaid = now();
            $member->payment_type = 'life';
            $member->save();
            $message = "You have successfully paid the life time membership fee.";
        }

        return view('Front.member.paymentSuccess', compact('message'));
    }
}
