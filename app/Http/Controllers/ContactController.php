<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name' => $request->name,
            'company' => $request->company,
            'email' => $request->email,
            'price' => $request->price,
            'message' => $request->message
        ];
        Mail::to('receiver@gmail.com')->send(new ContactMail($data));
        return 'Thanks for contacting us!';
    }
}
