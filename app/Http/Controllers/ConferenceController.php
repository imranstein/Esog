<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ConferenceController
{
    public function index()
    {
        $count = Conference::count();

        return view('conference.index', compact('count'));
    }

    public function create()
    {
        return view('conference.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:140',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
        ]);

        $conference = Conference::create($validated);

        return redirect()->route('conference.index')->with('success', 'Conference Created successfully');
    }

    public function show($id)
    {
        $conference = Conference::findOrFail($id);
    }

    public function edit($id)
    {
        $conference = Conference::findOrFail($id);

        return view('conference.edit', compact('conference'));
    }

    public function update(Request $request, $id)
    {
        $conference = Conference::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:130',
            'description' => 'nullable|string',
            'date' => 'nullable|date',
        ]);


        $conference->update($validated);

        return redirect()->route('conference.index')->with('update', 'Conference Updated successfully');
    }

    public function destroy($id)
    {
        $conference = Conference::findOrFail($id);
        $conference->delete();

        return redirect()->route('conference.index')->with('delete', 'Conference Deleted successfully');
    }
}
