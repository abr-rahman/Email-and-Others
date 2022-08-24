<?php

namespace App\Http\Controllers;

use App\Mail\welComeMail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function mail(){
        return new welComeMail();
    }
}
