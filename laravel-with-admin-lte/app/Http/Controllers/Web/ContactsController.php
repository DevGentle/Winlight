<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class ContactsController extends Controller
{
    public function getContact()
    {
        return view('web.contact.contact');
    }

    public function postContact(ContactRequest $request)
    {
        $data = array(
            'subject' => $request->subject,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'description' => $request->description
        );

        Mail::send('web.contact.form', $data, function($message) use ($data){
            $message->from($data['email']);
            $message->to('sale_wlc@winnerlight.co.th');
            $message->subject($data['subject']);
        });

        Session::flash('success', 'Your email was sent!');

        return redirect('/contact-us');
    }

    public function findContactAll()
    {
        $contacts = DB::table('contacts')->get();

        return view('web.contact.contact', compact('contacts'));
    }
}
