<?php

namespace App\Http\Controllers\Front;

use App\Models\Conference;
use Illuminate\Http\Request;

class ConferenceController
{
    public function __invoke(Request $request)
    {
        $conferences = Conference::latest()->paginate(5);

        return view('Front.conference', compact('conferences'));
    }
}
