<?php

namespace App\Http\Controllers\Front;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController
{
    public function __invoke(Request $request)
    {
        $courses = Course::latest()->paginate(9);
        // if user is logged in redirect to Front.member.course
        if (auth()->check()) {
            return view('Front.member.course', compact('courses'));
        }
        return view('Front.course', compact('courses'));
    }
}
