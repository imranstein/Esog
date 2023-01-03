<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Advocacy;
use App\Models\Course;
use App\Models\Guidelines;
use App\Models\Publication;
use Illuminate\Http\Request;

class DetailController
{
    public function __invoke(Request $request, $id, $model)
    {
        if ($model == 'News') {
            $result = News::findOrFail($id);
            $latests = News::where('id', '!=', $id)->latest()->take(4)->get();
        } elseif ($model == 'Publication') {
            $result = Publication::findOrFail($id);
            $latests = Publication::where('id', '!=', $id)->latest()->take(4)->get();
        } elseif ($model == 'Guidelines') {
            $result = Guidelines::findOrFail($id);
            $latests = Guidelines::where('id', '!=', $id)->latest()->take(4)->get();
        } elseif ($model == 'Advocacy') {
            $result = Advocacy::findOrFail($id);
            $latests = Advocacy::where('id', '!=', $id)->latest()->take(4)->get();
        } elseif ($model == 'Course') {
            $result = Course::findOrFail($id);
            $latests = Course::where('id', '!=', $id)->latest()->take(4)->get();
        }

        return view('Front.detail', compact('result', 'latests', 'model'));
    }
}
