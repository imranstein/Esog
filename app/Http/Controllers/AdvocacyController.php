<?php

namespace App\Http\Controllers;

use App\Models\Advocacy;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class AdvocacyController
{
    public function index()
    {
        $count = Advocacy::count();

        return view('advocacy.index', compact('count'));
    }

    public function create()
    {
        return view('advocacy.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            Image::make($document)->save('Document/' . $name_gen);

            $last_doc = 'Document/' . $name_gen;
        }
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:20048',
            'document' => 'nullable|mimes:pdf|max:20048',
        ], [
            'title.required' => 'Please Input Title',
            'content.required' => 'Please Input Content',
            'photo.mimes' => 'Photo Must Be jpg,jpeg,png',
            'photo.max' => 'Photo Must Be Less Than 20MB',
            'document.mimes' => 'Document Must Be pdf',
            'document.max' => 'Document Must Be Less Than 20MB',
        ]);

        $advocacy = Advocacy::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'photo' => $last_thumb ?? null,
            'document' => $last_doc ?? null,
        ]);

        return redirect()->route('advocacy.index')->with('success', 'Advocacy Created successfully');
    }

    public function show($id)
    {
        $advocacy = Advocacy::findOrFail($id);
    }

    public function edit($id)
    {
        $advocacy = Advocacy::findOrFail($id);

        return view('advocacy.edit', compact('advocacy'));
    }

    public function update(Request $request, $id)
    {
        $advocacy = Advocacy::findOrFail($id);

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $name_gen = hexdec(uniqid()) . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        } else {
            $last_thumb = $advocacy->photo;
        }
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            Image::make($document)->save('Document/' . $name_gen);

            $last_doc = 'Document/' . $name_gen;
        } else {
            $last_doc = $advocacy->document;
        }


        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'photo' => 'nullable|mimes:jpg,jpeg,png|max:20048',
            'document' => 'nullable|mimes:pdf|max:20048',
        ], [
            'title.required' => 'Please Input Title',
            'content.required' => 'Please Input Content',
            'photo.mimes' => 'Photo Must Be jpg,jpeg,png',
            'photo.max' => 'Photo Must Be Less Than 20MB',
            'document.mimes' => 'Document Must Be pdf',
            'document.max' => 'Document Must Be Less Than 20MB',
        ]);


        $advocacy->update([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'photo' => $last_thumb ?? null,
            'document' => $last_doc ?? null,
        ]);

        return redirect()->route('advocacy.index')->with('update', 'Advocacy Updated successfully');
    }

    public function destroy($id)
    {
        $advocacy = Advocacy::findOrFail($id);
        $advocacy->delete();

        return redirect()->route('advocacy.index')->with('delete', 'Advocacy Deleted successfully');
    }
}
