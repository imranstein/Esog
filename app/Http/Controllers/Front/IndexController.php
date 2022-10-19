<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Publication;
use App\Models\Team;
use Illuminate\Http\Request;

class IndexController
{
    public function __invoke(Request $request)
    {
        $latests = News::latest()->take(3)->get();
        $publications = Publication::latest()->take(4)->get();
        return view('Front.index', compact('latests', 'publications'));
    }
}
