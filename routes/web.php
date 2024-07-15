<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


/* Send-Mail Route */
Route::get('send-mail', [MailController::class, 'sendMail']);
