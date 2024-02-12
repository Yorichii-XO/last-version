<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactFormSubmission;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('mails.contact_mail');
    }

    public function send(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        ContactFormSubmission::create($request->all());

        Mail::to('benhardamarwa2@gmail.com')->send(new ContactFormMail($request->all()));

        return redirect()->route('mails.contact_mail')->with('success', 'Your message has been sent successfully!');
    }
}
