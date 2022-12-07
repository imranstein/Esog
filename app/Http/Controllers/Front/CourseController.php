<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController
{
    public function __invoke(Request $request)
    {
        $courses = Course::latest()->paginate(9);

        return view('Front.course', compact('courses'));

    }
}
