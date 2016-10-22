<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests;
use App\Model\Service\Service;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function findServiceAll()
    {
        $services = Service::all();

        return view('web.service.service', compact('services'));
    }
}
