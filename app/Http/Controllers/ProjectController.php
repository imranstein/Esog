<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;

class ProjectController
{
    public function index()
    {
        $count = Project::count();

        return view('project.index', compact('count'));
    }

    public function create()
    {
        return view('project.create');
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:40',
            'objective' => 'nullable|string|max:40',
            'funded_by' => 'nullable|string|max:40',
            'sites' => 'nullable|string|max:300',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
            'description' => 'nullable|string',
        ]);

        $project = Project::create($validated);

        return redirect()->route('project.index')->with('success', 'Project Created successfully');
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
    }

    public function edit($id)
    {
        $project = Project::findOrFail($id);

        return view('project.edit', compact('project'));
    }

    public function update(Request $request, $id)
    {
        $project = Project::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:40',
            'objective' => 'nullable|string|max:40',
            'funded_by' => 'nullable|string|max:40',
            'sites' => 'nullable|string|max:300',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date|after:start_date',
            'description' => 'nullable|string',
        ]);


        $project->update($validated);

        return redirect()->route('project.index')->with('update', 'Project Updated successfully');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('project.index')->with('delete', 'Project Deleted successfully');
    }
}
