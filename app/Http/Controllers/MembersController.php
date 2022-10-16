<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class MembersController
{
    public function index()
    {
        $count = Members::count();

        return view('member.index', compact('count'));
    }

    public function create()
    {
    }

    public function store(Request $request)
    {

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'nullable|unique:members|',
            'phone' => 'nullable|unique:members|digits_between:9,14|numeric',
            'department' => 'nullable',
            'designation' => 'nullable',
            'workplace' => 'nullable',
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:20048',
        ]);

        $members = Members::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],


        ]);
    }

    public function show($id)
    {
        $members = Members::findOrFail($id);
    }

    public function edit($id)
    {
        $members = Members::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([]);

        $members = Members::findOrFail($id);

        $members->update($validated);
    }

    public function destroy($id)
    {
        $members = Members::findOrFail($id);
        $members->delete();
    }
}
