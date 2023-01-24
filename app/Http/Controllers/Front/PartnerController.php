<?php

namespace App\Http\Controllers\Front;

use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController
{
    public function __invoke(Request $request)
    {
        $partners = Partner::latest()->paginate(15);

        return view('Front.partner', compact('partners'));
    }
}
