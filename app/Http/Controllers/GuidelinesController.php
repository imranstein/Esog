<?php

namespace App\Http\Controllers;

use App\Models\Guidelines;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class GuidelinesController
{
    public function index()
    {
        $count = Guidelines::count();

        return view('guidelines.index', compact('count'));
    }

    public function create()
    {
        return view('guidelines.create');
    }

    public function store(Request $request)
    {
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('/Document/'), $name_gen);

            $documentname = '/Document/' . $name_gen;
        } else {
            $documentname = 'default.pdf';
        }
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'nullable',
            'document' => 'nullable',
        ]);

        $guidelines = Guidelines::create([
            'title' => $validated['title'],
            'description' => $validated['description'],
            'author' => $validated['author'],
            'document' => $documentname,
        ]);

        return redirect()->route('guidelines.index')->with('success', 'Guidelines Created successfully');
    }

    public function show($id)
    {
        $guidelines = Guidelines::findOrFail($id);
    }

    public function edit($id)
    {
        $guideline = Guidelines::findOrFail($id);

        return view('guidelines.edit', compact('guideline'));
    }

    public function update(Request $request, $id)
    {
        $guidelines = Guidelines::findOrFail($id);

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('/Document/'), $name_gen);

            $documentname = '/Document/' . $name_gen;
        } else {
            $documentname = $guidelines->document;
        }
        $validated = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'author' => 'nullable',
            'document' => 'nullable',
        ]);


        $guidelines->update([
            'title' => $validated['title'] ?? $guidelines->title,
            'description' => $validated['description'] ?? $guidelines->description,
            'author' => $validated['author'] ?? $guidelines->author,
            'document' => $documentname,
        ]);

        return redirect()->route('guidelines.index')->with('update', 'Guidelines Updated successfully');
    }

    public function destroy($id)
    {
        $guidelines = Guidelines::findOrFail($id);
        $guidelines->delete();

        return redirect()->route('guidelines.index')->with('delete', 'Guidelines Deleted successfully');
    }
}
