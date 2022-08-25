<?php

use App\Http\Controllers\MailController;
use App\Mail\welComeMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('send-composer-email', [MailController::class, 'sendComposeEmail'])->name('email.send');
