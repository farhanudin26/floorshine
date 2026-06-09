<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\EnquiryMail;

class EnquiryController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'subject'  => 'required|string|max:200',
            'name'     => 'required|string|max:100',
            'email'    => 'required|email',
            'mobile'   => 'nullable|string|max:20',
            'question' => 'required|string|max:2000',
        ]);

        Mail::to('enquiry@floorpolishing.sg')
            ->cc('hannstars79@gmail.com')
            ->send(new EnquiryMail($validated));
        return back()->with('enquiry_success', true);
    }
}
