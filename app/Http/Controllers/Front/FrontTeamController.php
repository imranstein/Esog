<?php

namespace App\Http\Controllers\Front;

use App\Models\Team;
use Illuminate\Http\Request;

class FrontTeamController
{
    public function __invoke(Request $request)
    {
        $staffs = Team::where('type', 'Staff')->latest()->get();
        $executives = Team::where('type', 'Executive')->latest()->get();

        return view('Front.team', compact('staffs', 'executives'));
    }
}
