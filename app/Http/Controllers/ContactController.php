<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|max:255',
            'message' => 'required',
        ]);

        // Send email
        Mail::to('inspiredvisionafrica@gmail.com')->send(new ContactFormMail($validated));

        return back()->with('success', 'Thank you for your message. We will contact you soon!');
    }
}