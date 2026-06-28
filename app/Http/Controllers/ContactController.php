<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Contracts\Mail\Mailable;
use App\Mail\ContactMail;





class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([

            'name'=>'required',

            'email'=>'required|email',

            'message'=>'required'

        ]);

        Mail::to('kamalhossainm5443@gmail.com')
            ->send(new ContactMail($request));

        return back()->with(
            'success',
            'Message Sent Successfully!'
        );
    }
}