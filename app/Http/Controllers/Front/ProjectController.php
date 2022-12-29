<?php

namespace App\Http\Controllers\Front;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController
{
    public function __invoke(Request $request)
    {
        $projects = Project::latest()->paginate(9);

        return view('front.project', compact('projects'));
    }
}
