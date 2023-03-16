<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificateController
{

    public function generate($course, $startDate, $endDate)
    {
        ini_set('max_execution_time', 120);

        $name = Auth::user()->name;
        $courseName = $course;
        // format the start date and end date
        $startDate = Carbon::parse($startDate)->format('d-M-Y');
        $endDate = Carbon::parse($endDate)->format('d-M-Y');

        $pdfName = str_replace(' ', '_', $name . '_' . $courseName) . '.pdf';
        $pdf = app('dompdf.wrapper');
        $pdf->setOptions(['isPhpEnabled' => true, 'isHtml5ParserEnabled' => true]);
        $pdf->loadView('Front.member.certificate', compact('name', 'courseName', 'startDate', 'endDate'))->setPaper('a4', 'landscape')->setWarnings(false);

        // make the pdf name the course name and the name of the person
        return $pdf->download($pdfName);
    }
}
