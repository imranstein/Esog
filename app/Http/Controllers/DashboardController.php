<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Course;
use App\Models\MemberCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function __invoke(Request $request)
    {
    if (Auth::role('Member')) {
        $courses = MemberCourse::where('member_id', Auth::user()->id)->count();
        $finishedCourses = MemberCourse::where('member_id', Auth::user()->id)->where('finished_at', '!=', null)->count();
        $startedCourses = MemberCourse::where('member_id', Auth::user()->id)->where('started_at', '!=', null)->where('finished_at', '==', null)->count();

        return view('memberDashboard', compact('courses', 'finishedCourses', 'startedCourses'));
    }else{
        $courses = Course::count();
        $members = MemberCourse::count();
        $teams = Team::count();
        $users = User::where('role', '!=' ,'Member')->count();

        return view('dashboard', compact('courses', 'members', 'teams', 'users'));
    }
}
}
