<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use App\Models\Course;
use App\Models\MemberCourse;
use App\Models\Members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class DashboardController
{
    public function __invoke(Request $request)
    {
        if (Auth::user()->roles[0]->name == 'Member') {
            $memberId = Members::where('user_id', Auth::user()->id)->first()->id;
            $allCourses = Course::count();
            $courses = MemberCourse::where('member_id', $memberId)->count();
            $finishedCourses = MemberCourse::where('member_id', $memberId)->where('finished_at', '!=', null)->count();
            $startedCourses = MemberCourse::where('member_id', $memberId)->where('started_at', '!=', null)->where('finished_at', null)->count();
            $startRatio = $courses == 0 ? 0 : round($startedCourses / $courses * 100);
            $finishRatio = $courses == 0 ? 0 : round($finishedCourses / $courses * 100);
            $courseRatio = $allCourses == 0 ? 0 : round($courses / $allCourses * 100);
            return view('Front.member.dashboard', compact('allCourses', 'courses', 'finishedCourses', 'startedCourses', 'startRatio', 'finishRatio', 'courseRatio'));
        } else {
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
