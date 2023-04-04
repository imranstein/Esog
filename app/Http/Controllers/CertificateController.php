<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use App\Models\MemberCourse;
use App\Models\Members;
use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PHPUnit\Framework\Constraint\Count;
use Termwind\Components\Dd;

class CertificateController
{

    public function generate()
    {

        $memId = Members::where('user_id', Auth::user()->id)->first()->id;
        $courses = MemberCourse::where('member_id', $memId)->where('finished_at', '!=', null)->where('credit_hour', '>=', '0.25')->where('certified', null)->get();

        $creditHours = MemberCourse::where('member_id', $memId)->where('finished_at', '!=', null)->where('credit_hour', '>=', '0.25')->where('certified', null)->sum('credit_hour');
        // round the credit hours to the nearest 0.25
        $creditHours = round($creditHours * 4) / 4;
        $count = count($courses);
        $courseId = MemberCourse::where('member_id', $memId)->where('finished_at', '!=', null)->where('credit_hour', '>=', '0.25')->where('certified', null)->pluck('id')->toArray();
        if ($courseId == null) {

            return redirect()->back()->with('error', 'You have no courses to be certified');
        }
        ini_set('max_execution_time', 120);

        $name = Auth::user()->name;
        // $courseName = $course;
        // // format the start date and end date
        // $startDate = Carbon::parse($startDate)->format('d-M-Y');
        // $endDate = Carbon::parse($endDate)->format('d-M-Y');
        $date = Carbon::now()->format('d-M-Y');

        $pdfName = str_replace(' ', '_', $name . '_' . $date) . '.pdf';
        $pdf = app('dompdf.wrapper');
        $pdf->setOptions(['isPhpEnabled' => true, 'isHtml5ParserEnabled' => true]);
        $pdf->loadView('Front.member.certificate', compact('name', 'date', 'count', 'creditHours'))->setPaper('a4', 'landscape')->setWarnings(false);

        // make the pdf name the course name and the name of the person
        $document = $pdf->save(public_path('/Certificate/' . $pdfName));

        // save the certificate to the database
        $certificate = new Certificate();
        $certificate->user_id = Auth::user()->id;
        $certificate->certificate = $pdfName;
        $certificate->save();

        foreach ($courseId as $course) {
            $course = MemberCourse::find($course);
            $course->update(['certified' => now()]);
        }


        return $pdf->download($pdfName);
    }

    public function history()
    {
        $certificates = Certificate::where('user_id', Auth::user()->id)->get();
        return view('Front.member.certificateHistory', compact('certificates'));
    }
}
