<?php

namespace App\Http\Controllers\Front;

use App\Models\Advocacy;
use Illuminate\Http\Request;

class AdvocacyController
{
    public function __invoke(Request $request)
    {
        $advocacies = Advocacy::latest()->paginate(9);
        return view('Front.advocacy', compact('advocacies'));
    }
}
