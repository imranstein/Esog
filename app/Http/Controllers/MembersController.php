<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController
{
    public function index()
    {
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

        ]);

        $members = Members::create($validated);

        return redirect()->route('{{ route }}.show', $members)->with('success', 'Created successfully.');
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
        $validated = $request->validate([

        ]);

        $members = Members::findOrFail($id);

        $members->update($validated);

        return redirect()->route('{{ route }}.show', $members)->with('success', 'Updated successfully.');
    }

    public function destroy($id)
    {
        $members = Members::findOrFail($id);
        $members->delete();
        return redirect()->route('{{ route }}.show', $members)->with('success', 'Created successfully.');

    }
}
