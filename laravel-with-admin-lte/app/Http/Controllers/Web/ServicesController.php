<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function findServiceAll()
    {
        $services = DB::table('services')->get();

        return view('web.service.service', compact('services'));
    }
}
