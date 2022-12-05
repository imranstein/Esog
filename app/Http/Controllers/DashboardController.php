<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Course;
use App\Models\MemberCourse;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController
{
    public function __invoke(Request $request)
    {
    if (Auth::user()->roles[0]->name == 'Member') {
        $courses = MemberCourse::where('member_id', Auth::user()->id)->count();
        $finishedCourses = MemberCourse::where('member_id', Auth::user()->id)->where('finished_at', '!=', null)->count();
        $startedCourses = MemberCourse::where('member_id', Auth::user()->id)->where('started_at', '!=', null)->where('finished_at', '==', null)->count();

        return view('memberDashboard', compact('courses', 'finishedCourses', 'startedCourses'));
    }else{
        $courses = Course::count();
        $members = MemberCourse::count();
        $teams = Team::count();
        //get users whose role is not Member
        $membersId = Members::where('user_id', '!=', null)->pluck('user_id');
        $users = User::whereNotIn('id', $membersId)->count();

        return view('dashboard', compact('courses', 'members', 'teams', 'users'));
    }
}
}
