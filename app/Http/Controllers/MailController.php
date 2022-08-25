<?php

namespace App\Http\Controllers;

use App\Mail\ComposeMail;
use App\Mail\welComeMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function mail(){
        return new welComeMail();
    }

    public function sendComposeEmail(Request $request)
    {
        $myEmailData = [
            'to' => $request->to_email,
            'subject' => $request->subject,
            'image' => $request->image,
            'body' => $request->body,
        ];

        Mail::to($request->to_email)->send(new ComposeMail($myEmailData));
        return 'Sent!';
    }
}
