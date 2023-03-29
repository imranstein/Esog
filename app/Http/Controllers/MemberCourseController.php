<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Course;
use App\Models\Members;
use Termwind\Components\Dd;
use App\Models\MemberCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MemberCourseController
{
    public function index()
    {
        if (Auth::user()->roles[0]->name == 'Member') {
            $member_id = Members::where('user_id', Auth::user()->id)->first()->id;
            $memberCourses = MemberCourse::with('course', 'member')->where('member_id', $member_id)->paginate(6);
            $count = $memberCourses->count();
            return view('Front.member.memberCourse', compact('memberCourses', 'count'));
        } else {
            $count = MemberCourse::count();

            return view('memberCourse.index', compact('count'));
        }
    }

    public function create()
    {
        $course  = Course::all();
        return view('memberCourse.create', compact('course'));
    }

    public function store(Request $request, $id)
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
        if ($memberCourse->started_at == null) {
            $memberCourse->update([
                'started_at' => now(),
            ]);
        }
        $courseId = $memberCourse->course_id;
        $memberId = $memberCourse->member_id;
        $course = Course::findOrFail($courseId);

        $memberCourses = MemberCourse::where('member_id', $memberId)->where('finished_at', null)->whereNotIn('id', [$memberCourse->id])->take(2)->pluck('course_id')->toArray();

        $courses = Course::whereIn('id', $memberCourses)->get();
        return view('Front.member.detailAlt', compact('course', 'courses', 'memberCourse'));
    }

    public function edit($id)
    {
        $memberCourse = MemberCourse::findOrFail($id);

        return view('memberCourse.edit', compact('memberCourse'));
    }

    public function update(Request $request, $id)
    {
        $memberCourse = MemberCourse::findOrFail($id);

        $validated = $request->validate([]);


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
        $member_id = Members::where('user_id', Auth::user()->id)->first()->id;
        MemberCourse::create([
            'member_id' => $member_id,
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
        $memberId = $memberCourse->member_id;
        $course = Course::findOrFail($memberCourse->course_id);
        $memberCourses = MemberCourse::where('member_id', $memberId)->where('finished_at', null)->whereNotIn('id', [$memberCourse->id])->take(2)->pluck('course_id')->toArray();

        $courses = Course::whereIn('id', $memberCourses)->get();
        return view('Front.member.detailAlt', compact('course', 'courses', 'memberCourse'));
        // return redirect()->route('memberCourse.index')->with('success', 'MemberCourse Started successfully');
    }


    public function finish(Request $request)
    {
        $id = $request->id;
        // dd($id);
        $member_id = Members::where('user_id', Auth::user()->id)->first()->id;
        $memberCourse = MemberCourse::where('course_id', $id)->where('member_id', $member_id)->first();
        // dd($memberCourse);
        $courseLength = Course::findOrFail($memberCourse->course_id)->length;


        //check if the course length is greater than between started_at and now in minutes
        //the minute differece between started_at and now
        $now = Carbon::now()->toDateTimeString();
        //   change the format of started_at to be the same as now
        $started = Carbon::parse($memberCourse->started_at)->toDateTimeString();

        $diff = Carbon::parse($now)->diffInMinutes($started);


        if ($courseLength > $diff) {
            return redirect()->route('memberCourse.show', $id)->with('delete', 'Course length is greater than the time you have spent on it');
        } else {
            $memberCourse->update([
                'finished_at' => now(),
            ]);

            return redirect()->route('memberCourse.index')->with('success', 'Course been Finished successfully');
        }
    }

    public function watchedTime(Request $request)
    {

        $time = $request->time;
        $courseId = $request->courseId;
        // change the time from seconds to minute and round it up to the nearest biggest integer
        $time = ceil($time / 60);

        //  if time is 60 then credit hour is 1 ,if time is 30 then credit hour is 0.5 if time is 15 then credit hour is 0.25, if time is less than 8 then credit hour is 0 and credit hour cant be less than 0.25
        if ($time) {
            $creditHour = $time / 60;
            // always  round up to the nearest 0.25 value
            $creditHour = ceil($creditHour * 4) / 4;
            if ($time < 8) {
                $creditHour = 0;
            }


        }
        // dd($time);
        // dd($courseId);
        $mId = Members::where('user_id', Auth::user()->id)->first()->id;

        $courseLength = Course::findOrFail($courseId)->video_length;

        $memberCourse = MemberCourse::where('course_id', $courseId)->where('member_id', $mId)->first();


        if ($memberCourse->video_length < $time) {
            $memberCourse->update([
                'credit_hour' => $creditHour,
                'video_length' => $time,
            ]);
        }


        $finalLength = $time / $courseLength * 100;


        if ($finalLength > 80) {
            $memberCourse->update([
                'finished_at' => now(),
            ]);
        }
    }
    public function lastWatchedPosition(Request $request)
    {
        $courseId = $request->courseId;
        $mId = Members::where('user_id', Auth::user()->id)->first()->id;


        $memberCourse = MemberCourse::where('course_id', $courseId)->where('member_id', $mId)->first();

        return $memberCourse->video_length;
    }
    
}
