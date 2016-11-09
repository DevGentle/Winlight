<?php

namespace App\Services;

use App\Http\Requests;
use App\Model\Slideshow\Slideshow;

class SlideShowService
{
    public function findSlides()
    {
        $slides = Slideshow::all();

        return view('web.main.nav', compact('slides'));
    }
}
