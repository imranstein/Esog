<?php

namespace App\Http\Controllers\Front;

use App\Models\Guidelines;
use Illuminate\Http\Request;

class GuidelinesController
{
    public function __invoke(Request $request)
    {
        $guidelines = Guidelines::orderBy('created_at', 'desc')->paginate(9);

        return view('Front.guidelines', compact('guidelines'));
    }
}
