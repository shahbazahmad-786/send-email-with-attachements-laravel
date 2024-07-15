<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail()
    {
        $toMail = "numan390ahmad@gmail.com";
        $subject = "Test Mail";
        $message = "This is a Test Mail in Laravel";

        Mail::to($toMail)->send(new SendMail($subject, $message));
    }
}
