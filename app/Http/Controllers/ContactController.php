<?php

namespace App\Http\Controllers;

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

    public function submit(ContactRequest $request)
    {
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactMail($request->name, $request->email, $request->content));

        // return with message
        return redirect('/contact')->with(['success' => 'submit message success!']);
    }
}
