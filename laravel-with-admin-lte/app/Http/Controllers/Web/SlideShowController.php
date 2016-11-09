<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Slideshow\Slideshow;

class SlideShowController extends Controller
{
    public function findReferenceAll()
    {
        $slides = Slideshow::all();

        return view('web.main.nav', compact('slides'));
    }
}
