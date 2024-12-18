<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Rules\ReCaptcha;

class ContactController extends Controller
{
    public function sendContactMail(Request $request)
    {
        $contactEmail = config('app.contact_mail_address');

        // Define validation rules 
        $rules = [
            'title' => 'required|in:Mr.,Ms.',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'country' => 'required|in:Indonesia,Japan',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
            'g-recaptcha-response' => ['required', new ReCaptcha]
        ];
        $request->validate($rules);
        // Validate the request 
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->withInput()->withErrors($validator);
        }

        $validatedData = $validator->validated();

        // Sanitize the message to prevent XSS 
        $validatedData['message'] = htmlspecialchars($validatedData['message'], ENT_QUOTES, 'UTF-8');

        Mail::to($contactEmail)->send(new ContactMail($validatedData));

        return back()->with('success', 'Your message has been sent successfully!');
    }
}
