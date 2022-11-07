<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;

class MemberController
{
    public function __invoke(Request $request)
    {
        return view('Front.memberRegister');
    }
}
