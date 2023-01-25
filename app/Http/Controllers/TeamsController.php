<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class TeamsController
{
    public function index()
    {
        $count = Team::count();
        return view('team.index', compact('count'));
    }

    public function create()
    {
        return view('team.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate([
            'type' => 'required',
            'designation' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'required|mimes:jpeg,jpg,png|max:20048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone' => 'required|numeric|digits_between:9,15',
        ]);

        $team = Team::create([
            'type' => $validated['type'],
            'designation' => $validated['designation'],
            'name' => $validated['name'],
            'email' => $validated['email'],
            'image' => $last_thumb ?? null,
            'facebook' => $validated['facebook'],
            'twitter' => $validated['twitter'],
            'linkedin' => $validated['linkedin'],
            'phone' => $validated['phone'],
        ]);

        return redirect()->route('team.index')->with('success', 'Team Member Added Successfully');
    }

    public function show($id)
    {
        $team = Team::findOrFail($id);
    }

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('team.edit', compact('team'));
    }

    public function update(Request $request, $id)
    {
        $team = Team::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(500, 500)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate([
            'type' => 'required',
            'designation' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'mimes:jpeg,jpg,png|max:20048',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'phone' => 'required|numeric|digits_between:9,15',
        ]);


        $team->update($validated);
        $team->image = $last_thumb ?? $team->image;
        $team->save();

        return redirect()->route('team.index')->with('update', 'Team Member Updated Successfully');
    }

    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('team.index')->with('success', 'Team Member Deleted Successfully');
    }
}
