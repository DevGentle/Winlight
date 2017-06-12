<?php

namespace App\Http\Controllers\Web;

use App\Model\Paper\News;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class EventsController extends Controller
{
    public function findEventAll()
    {
        $events = DB::table('news')->paginate(10);

        return view('web.event.activity', compact('events'));
    }

    public function findEvent($eventId)
    {
        $event = News::findOrFail($eventId);

        return view('web.event.activity_show', compact('event'));
    }
}
