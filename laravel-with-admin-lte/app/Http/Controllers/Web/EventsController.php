<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Paper\News;
use App\Http\Controllers\Controller;

class EventsController extends Controller
{
    public function findEventAll()
    {
        $events = News::all()->sortByDesc('created_at');

        return view('web.event.activity', compact('events'));
    }
}
