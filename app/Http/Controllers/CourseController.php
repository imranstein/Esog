<?php

namespace App\Http\Controllers;

use getID3;
use App\Models\Course;
use App\Models\Members;
use App\Models\MemberCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class CourseController
{
    public function index()
    {
        $count = Course::count();

        return view('course.index', compact('count'));
    }

    public function create()
    {
        return view('course.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'tags' => 'nullable',
            'description' => 'nullable',
            'author' => 'nullable',
            'document' => 'nullable',
            'video' => 'nullable',
            'is_paid' => 'nullable',
            'length' => 'required|numeric',
        ]);
        if ($request->hasFile('video')) {


            $gallery = $request->file('video');
            $getID3 = new getID3;
            $file = $getID3->analyze($gallery);
            $duration_in_seconds = $file['playtime_seconds'];
            $duration = $duration_in_seconds / 60;
            // round it up to the nearest minute
            $duration = ceil($duration);

            $name_gen = hexdec(uniqid());
            $doc_ext = strtolower($gallery->getClientOriginalExtension());
            $doc_name = $name_gen . '.' . $doc_ext;
            $up_location = 'Video/';
            $last_vid = $up_location . $doc_name;
            $gallery->move($up_location, $doc_name);
        } else {
            $last_vid = 'default.mp4';
        }

        // if duration is 60 mins then credit_hour is 1,if it is 30 mins then credit_hour is 0.5,if it is 15 mins then credit_hour is 0.25 and credit hour can't be less than 0.25
        if ($duration != null) {
            $credit_hour = $duration / 60;
            if ($credit_hour < 0.25) {
                $credit_hour = 0.25;
            }
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        }
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('/Document/'), $name_gen);

            $documentname = '/Document/' . $name_gen;
        } else {
            $documentname = 'default.pdf';
        }

        $course = Course::create([
            'title' => $validated['title'],
            'tags' => $validated['tags'],
            'description' => $validated['description'],
            'author' => $validated['author'],
            'document' => $documentname,
            'video' => $last_vid,
            'is_paid' => $validated['is_paid'] ?? 0,
            'length' => $validated['length'],
            'thumbnail' => $last_thumb ?? null,
            'video_length' => $duration ?? null,
            'credit_hour' => $credit_hour ?? null,
        ]);

        return redirect()->route('course.index')->with('success', 'Course Created successfully');
    }

    public function show($id)
    {

        $course = Course::findOrFail($id);
        if (Auth::user()->roles[0]->name == 'Member') {
            return view('Front.member.detail', compact('course'));
        }

        return view('course.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);

        return view('course.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);

        if ($request->hasFile('video')) {

            $gallery = $request->file('video');

            $name_gen = hexdec(uniqid());
            $doc_ext = strtolower($gallery->getClientOriginalExtension());
            $doc_name = $name_gen . '.' . $doc_ext;
            $up_location = 'Video/';
            $last_vid = $up_location . $doc_name;
            $gallery->move($up_location, $doc_name);
        } else {
            $last_vid = $course->video;
        }

        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $name_gen = hexdec(uniqid()) . '.' . $document->getClientOriginalExtension();
            $document->move(public_path('/Document/'), $name_gen);

            $documentname = '/Document/' . $name_gen;
        } else {
            $documentname = $course->document;
        }
        if ($request->hasFile('thumbnail')) {
            $thumbnail = $request->file('thumbnail');
            $name_gen = hexdec(uniqid()) . '.' . $thumbnail->getClientOriginalExtension();
            Image::make($thumbnail)->save('Photo/' . $name_gen);

            $last_thumb = 'Photo/' . $name_gen;
        } else {
            $last_thumb = $course->thumbnail;
        }
        $validated = $request->validate([
            'title' => 'required',
            'tags' => 'nullable',
            'description' => 'nullable',
            'author' => 'nullable',
            'document' => 'nullable',
            'video' => 'nullable',
            'is_paid' => 'nullable',
            'length' => 'required|numeric',
        ]);

        $course->update([
            'title' => $validated['title'] ?? $course->title,
            'tags' => $validated['tags'] ?? $course->tags,
            'description' => $validated['description'] ?? $course->description,
            'author' => $validated['author'] ?? $course->author,
            'document' => $documentname,
            'video' => $last_vid,
            'is_paid' => $validated['is_paid'] ?? $course->is_paid,
            'length' => $validated['length'] ?? $course->length,
            'thumbnail' => $last_thumb,
        ]);

        return redirect()->route('course.index')->with('update', 'Course Updated successfully');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('course.index')->with('delete', 'Course Deleted successfully');
    }
    public function enroll($id)
    {
        // get the member id from the member table where the user id is equal to the auth id
        $member_id = Members::where('user_id', Auth::user()->id)->first()->id;
        $memberCourse = MemberCourse::create([

            'member_id' => $member_id,
            'course_id' => $id,
            'is_approved' => now(),
            'started_at' => null,
            'finished_at' => null,
        ]);
        // dd($memberCourse);

        return redirect()->route('memberCourse.index')->with('success', 'MemberCourse Created successfully');
    }
}
