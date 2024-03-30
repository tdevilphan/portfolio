<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactUsFormController extends Controller
{
    public function ContactUsForm(Request $request) {
        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);
        //  Store data in database
        Contact::create($request->except('_token'));
        //  Send mail to admin
//        Mail::send('mail', array(
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'phone' => $request->get('phone'),
//            'subject' => $request->get('subject'),
//            'user_query' => $request->get('message'),
//        ), function($message) use ($request){
//            $message->from($request->email);
//            $message->to(env('MAIL_USERNAME'), 'Admin')->subject('New customer message');
//        });
        //
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
