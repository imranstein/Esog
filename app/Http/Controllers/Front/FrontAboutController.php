<?php

namespace App\Http\Controllers\Front;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontAboutController
{
    public function __invoke(Request $request)
    {
        $teams = Team::where('type', 'Executive')->latest()->take(3)->get();
        return view('Front.about', compact('teams'));
    }
}
