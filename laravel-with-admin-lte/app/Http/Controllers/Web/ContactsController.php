<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ContactsController extends Controller
{
    public function findContactAll()
    {
        $contacts = DB::table('contacts')->get();

        return view('web.contact.contact', compact('contacts'));
    }
}
