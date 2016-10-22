<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Reference\Reference;
use App\Http\Controllers\Controller;

class ReferencesController extends Controller
{
    public function findReferenceAll()
    {
        $references = Reference::all();

        return view('web.reference.reference', compact('references'));
    }
}
