<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PublicationController
{
    public function index()
    {
        $count = Publication::count();

        return view('publication.index', compact('count'));
    }

    public function create()
    {
        return view('publication.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(350, 500)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentname = time() . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('/Document'), $documentname);
        } else {
            $documentname = 'default.pdf';
        }
        $validated = $request->validate([
            'title' => 'required',
            'tags' => 'nullable',
            'description' => 'nullable|max:2000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            'author' => 'nullable',
            'document' => 'nullable',
        ]);

        $publication = Publication::create([
            'title' => $validated['title'],
            'tags' => $validated['tags'],
            'description' => $validated['description'],
            'image' => $last_thumb,
            'author' => $validated['author'],
            'document' => $documentname,
        ]);

        return redirect()->route('publication.index')->with('success', 'Publication Created successfully');
    }

    public function show($id)
    {
        $publication = Publication::findOrFail($id);
    }

    public function edit($id)
    {
        $publication = Publication::findOrFail($id);

        return view('publication.edit', compact('publication'));
    }

    public function update(Request $request, $id)
    {
        $publication = Publication::findOrFail($id);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $documentname = time() . '.' . $document->getClientOriginalExtension();
            $document->move(('/Document'), $documentname);
            $publication->document = $documentname;
        }
        $validated = $request->validate([
            'title' => 'required',
            'tags' => 'nullable',
            'description' => 'nullable|max:2000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            'author' => 'nullable',
            'document' => 'nullable',
        ]);


        $publication->update([
            'title' => $validated['title'] ?? $publication->title,
            'tags' => $validated['tags'] ?? $publication->tags,
            'description' => $validated['description'] ?? $publication->description,
            'author' => $validated['author'] ?? $publication->author,
            'document' => $documentname ?? $publication->document,
            'image' => $last_thumb ?? $publication->image,
        ]);

        return redirect()->route('publication.index')->with('update', 'Publication Updated successfully');
    }

    public function destroy($id)
    {
        $publication = Publication::findOrFail($id);
        $publication->delete();

        return redirect()->route('publication.index')->with('delete', 'Publication Deleted successfully');
    }
}
