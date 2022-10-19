<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Publication;
use Illuminate\Http\Request;

class DetailController
{
    public function __invoke(Request $request, $id, $model)
    {
        if ($model == 'news') {
            $result = News::findOrFail($id);
            $latests = News::where('id', '!=', $id)->latest()->take(6)->get();
        } elseif ($model == 'publication') {
            $result = Publication::findOrFail($id);
            $latests = Publication::where('id', '!=', $id)->latest()->take(6)->get();
        }

        return view('Front.detail', compact('result', 'latests', 'model'));
    }
}
