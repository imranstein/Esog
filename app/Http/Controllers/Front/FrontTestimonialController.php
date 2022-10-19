<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class FrontTestimonialController
{
    public function __invoke(Request $request)
    {
        return view('Front.testimonials');
    }
}
