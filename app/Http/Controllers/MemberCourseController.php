<?php
namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\MemberCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MemberCourseController
{
    public function index()
    {
        if(Auth::user()->roles[0]->name == 'Member'){
            $memberCourses = MemberCourse::with('course')->where('member_id', Auth::user()->id)->paginate(5);
            $count = $memberCourses->count();
            return view('memberCourse.individual', compact('memberCourses', 'count'));
        }else{
    $count = MemberCourse::count();

    return view('memberCourse.index', compact('count'));
}
    }

    public function create()
    {
        $course  = Course::all();
        return view('memberCourse.create', compact('course'));
    }

    public function store(Request $request,$id)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
        ]);

        $memberCourse = MemberCourse::create([
            'member_id' => Auth::user()->id,
            'course_id' => $validated['course_id'],
            'is_approved' => null,
            'started_at' => null,
            'finished_at' => null,
        ]);

        return redirect()->route('memberCourse.index')->with('success', 'MemberCourse Created successfully');

    }

    public function show($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);
    }

    public function edit($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);

        return view('memberCourse.edit', compact('memberCourse'));
    }

    public function update(Request $request, $id)
    {
        $memberCourse = MemberCourse::findOrFail($id);

        $validated = $request->validate([

        ]);


        $memberCourse->update($validated);

        return redirect()->route('memberCourse.index')->with('update', 'MemberCourse Updated successfully');

    }

    public function destroy($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);
        $memberCourse->delete();

        return redirect()->route('memberCourse.index')->with('delete', 'MemberCourse Deleted successfully');
    }

    public function enroll($id)
    {
        MemberCourse::create([
            'member_id' => Auth::user()->id,
            'course_id' => $id,
            'is_approved' => null,
            'started_at' => null,
            'finished_at' => null,
        ]);

        return redirect()->route('memberCourse.index')->with('success', 'You Have enrolled to this course.Please wait for approval');
    }

    public function approve($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);
        $memberCourse->update([
            'is_approved' => now(),
        ]);

        return redirect()->route('memberCourse.index')->with('success', 'MemberCourse Approved successfully');
    }

    public function start($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);
        $memberCourse->update([
            'started_at' => now(),
        ]);

        return redirect()->route('memberCourse.index')->with('success', 'MemberCourse Started successfully');
    }

    public function finish($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);
        $courseLength = Course::findOrFail($memberCourse->course_id)->length;
        //check if the course length is greater than between started_at and now in minutes
        if ($courseLength > $memberCourse->started_at->diffInMinutes(now())) {
            return redirect()->route('memberCourse.index')->with('error', 'Course length is greater than the time you have spent on it');
        }
    else{
    $memberCourse->update([
        'finished_at' => now(),
    ]);

    return redirect()->route('memberCourse.index')->with('success', 'Course been Finished successfully');
}
    }
}
