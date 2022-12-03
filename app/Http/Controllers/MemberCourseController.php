<?php
namespace App\Http\Controllers;

use App\Models\MemberCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class MemberCourseController
{
    public function index()
    {
        $count = MemberCourse::count();

        return view('memberCourse.index', compact('count'));
    }

    public function create()
    {
        return view('memberCourse.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([

        ]);

        $memberCourse = MemberCourse::create($validated);

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
}
