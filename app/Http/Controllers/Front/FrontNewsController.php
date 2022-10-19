<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use Illuminate\Http\Request;

class FrontNewsController
{
    public function __invoke(Request $request)
    {
        $news = News::latest()->paginate(9);

        return view('Front.news', compact('news'));
    }
}
