<?php

namespace App\Http\Controllers\Front;

use App\Models\Publication;
use Illuminate\Http\Request;

class FrontPublicationController
{
    public function __invoke(Request $request)
    {
        $publications = Publication::latest()->paginate(12);

        return view('Front.publication', compact('publications'));
    }
}
