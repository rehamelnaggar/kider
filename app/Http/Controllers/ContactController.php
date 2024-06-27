<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function index()
    {
        $title = "Contact";
        $emails = Contact::get();
        $messages = Contact::where('readable', 0)->take(3)->get();
        return view('dashboard.contact', compact('title', 'emails', 'messages'));
    }

    public function show(string $id)
    {
        $title = "contact";
        $email = Contact::findOrFail($id);
        $messages = Contact::where('readable', 0)->take(3)->get();
        Contact::where('id', $id)->update(['readable' => 1]);
        return view('dashboard.showEmail', compact('email', 'title', 'messages'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|string|max:100',
            'subject' => 'required|string|max:100',
            'message' => 'required|string|max:250',
        ]);

        Contact::create($data);

        return 'add';
    }

    public function sendMail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'message' => $request->message,
        ];

        Mail::to('recipient@example.com')->send(new ContactMail($data));

        //return back()->with('success', 'Your message has been sent successfully!');
        return "mail send";
    }
}