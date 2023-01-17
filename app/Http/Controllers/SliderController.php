<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class SliderController
{
    public function index()
    {
        $count = Slider::count();

        return view('slider.index', compact('count'));
    }

    public function create()
    {
        return view('slider.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'required|mimes:jpeg,jpg,png|max:20048',
        ]);

        $slider = Slider::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'image' => $last_thumb ?? null,
        ]);

        return redirect()->route('slider.index')->with('success', 'Slider Created successfully');
    }

    public function show($id)
    {
        $slider = Slider::findOrFail($id);
    }

    public function edit($id)
    {
        $slider = Slider::findOrFail($id);

        return view('slider.edit', compact('slider'));
    }

    public function update(Request $request, $id)
    {
        $slider = Slider::findOrFail($id);

        if ($request->hasFile('image')) {
            $photo = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        } else {
            $last_thumb = $slider->image;
        }

        $validated = $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'mimes:jpeg,jpg,png|max:20048',
        ]);


        $slider->update([
            'title' => $validated['title'] ?? $slider->title,
            'description' => $validated['description'] ?? $slider->description,
            'image' => $last_thumb,
        ]);

        return redirect()->route('slider.index')->with('update', 'Slider Updated successfully');
    }

    public function destroy($id)
    {
        $slider = Slider::findOrFail($id);
        $slider->delete();

        return redirect()->route('slider.index')->with('delete', 'Slider Deleted successfully');
    }
}
