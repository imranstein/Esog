<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class PartnerController
{
    public function index()
    {
        $count = Partner::count();

        return view('partner.index', compact('count'));
    }

    public function create()
    {
        return view('partner.create');
    }

    public function store(Request $request)
    {
        // if ($request->hasFile('logo')) {
        //     $logo = $request->file('logo');
        //     $name_gen = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
        //     Image::make($logo)->save('Photo/' . $name_gen);

        //     $last_thumb = 'Photo/' . $name_gen;
        // }
        $validated = $request->validate([
            'name' => 'required',
            // 'logo' => 'required|mimes:jpeg,jpg,png|max:20048',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'description' => 'nullable',
        ]);

        $partner = Partner::create($validated);
        // $partner->logo = $last_thumb ?? null;
        // $partner->save();

        return redirect()->route('partner.index')->with('success', 'Partner Created successfully');
    }

    public function show($id)
    {
        $partner = Partner::findOrFail($id);
    }

    public function edit($id)
    {
        $partner = Partner::findOrFail($id);

        return view('partner.edit', compact('partner'));
    }

    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);

        // if ($request->hasFile('logo')) {
        //     $logo = $request->file('logo');
        //     $name_gen = hexdec(uniqid()) . '.' . $logo->getClientOriginalExtension();
        //     Image::make($logo)->save('Photo/' . $name_gen);

        //     $last_thumb = 'Photo/' . $name_gen;
        // }
        $validated = $request->validate([
            'name' => 'required',
            // 'logo' => 'nullable|mimes:jpeg,jpg,png|max:20048',
            'website' => 'nullable|url',
            'email' => 'nullable|email',
            'description' => 'nullable',
        ]);


        $partner->update($validated);
        // $partner->logo = $last_thumb ?? $partner->logo;
        // $partner->save();

        return redirect()->route('partner.index')->with('update', 'Partner Updated successfully');
    }

    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return redirect()->route('partner.index')->with('delete', 'Partner Deleted successfully');
    }
}
