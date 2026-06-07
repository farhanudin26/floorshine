<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\BookingEnquiryMail;

class BookingController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'          => 'required|string|max:100',
            'email'         => 'required|email',
            'contact'       => ['required', 'regex:/^\+65[0-9]{8}$/'],
            'address'       => 'required|string|max:255',
            'flooring_type' => 'required|string',
            'survey'        => 'required|in:yes,no',
            'survey_date'   => 'nullable|date|required_if:survey,yes',
            'remarks'       => 'nullable|string|max:1000',
        ]);

        Mail::to('hannstars79@gmail.com')->send(new BookingEnquiryMail($validated));

        return response()->json(['success' => true, 'message' => 'Enquiry sent successfully!']);
    }
}
