<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\DemoMail;
class MessageController extends Controller
{   
    public function sendMessage(Request $request)
    {

    // Validate the form data
    $validatedData = $request->validate([
        'cf-name' => 'required|string',
        'cf-email' => 'required|email',
       
        'cf-message' => 'nullable|string',
    ]);
    $subject = 'New Message from ' . $validatedData['cf-name'];

    // Send email to both addresses
    Mail::to('nashipacharya@gmail.com')->send(new DemoMail([
        'title'=> $validatedData['cf-email'],
        'subject' => $subject,
        'body' => $validatedData['cf-message'] ?? '',
    ]));
   
    return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
}
