<?php

namespace App\Http\Controllers\Front;

use App\Models\News;
use App\Models\Team;
use App\Models\Slider;
use App\Models\Project;
use App\Models\Advocacy;
use App\Models\Publication;
use Illuminate\Http\Request;

class IndexController
{
    public function __invoke(Request $request)
    {
        $latests = Advocacy::latest()->take(6)->get();
        $publications = Publication::latest()->take(4)->get();
        $sliders = Slider::take(3)->get();
        $today = date('Y-m-d');
        $projects = Project::where('end_date', '>=', $today)->latest()->take(5)->get();

        // $sliders = Slider::where('id', '!=', Slider::latest()->first()->id)->take(3)->get();
        // $firstSlider = Slider::orderBy('id', 'ASC')->first();
        return view('Front.index', compact('latests', 'publications', 'sliders', 'projects'));
    }
}
