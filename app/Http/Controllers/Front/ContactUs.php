<?php

namespace App\Http\Controllers\Front;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactUs
{
    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required|max:25',
            'email' => 'nullable|email:rfc,dns',
            'subject' => 'nullable|max:50|string',
            'message' => 'nullable|max:500|string',
        ]);

        $message = Message::create($request->all());

        return redirect()->back()->with('success', 'Message sent successfully');
    }

    public function open(){
        return view('Front.contact');
    }
}
