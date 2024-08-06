<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function index()
    {
        return $this->loadTheme('contact.index');
    }

    public function submit(Request $request)
    {
        $messages = [
            'name.required' => 'The :attribute field is required.',
            'name.min' => 'To sort, :attribute field at least :min characters.',
            'name.max' => 'To long, :attribute field max :max characters.',

            'email.required'    => 'The :attribute field is required.',
            'email.email'    => 'The :attribute must be a valid email address.',

            'subject.required'    => 'The :attribute field is required.',

            'message.required'    => 'The :attribute field is required.',
            'message.min' => 'To sort, :attribute field at least :min characters.',
        ];

        $validated = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|min:10',
        ], $messages);

        Contact::create($validated);
 
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($validated));

        // return with message
        return redirect('/contact')->with(['success' => 'submit message success!']);
    }
}
