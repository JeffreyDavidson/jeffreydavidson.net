<?php

namespace App\Http\Controllers;

use \Mail;
use App\Models\Contact;
use App\Mail\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    /**
     * Show the contact page.
     */
    public function show()
    {
        return view('pages.contact');
    }

    /**
     * Create a new contact.
     * 
     * @param Illuminate\Http\Request $request
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'string', 'email'],
            'phone' => ['nullable', 'string'],
            'subject' => ['required', 'string', Rule::in(['order', 'support', 'other'])],
            'comments' => ['required', 'string']
        ]);

        $contact = Contact::create($validated);

        $email = (new ContactMessage($contact))->from($request->email);

        Mail::to('jeffrey.davidson@outlook.com')->send($email);

        return redirect()->route('home');
    }
}
