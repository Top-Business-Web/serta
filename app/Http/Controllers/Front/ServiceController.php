<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $data['services'] = Service::all();
        return view('site.services', compact('data'));
    }

    public function singleService($id)
    {
        $data['single_service'] = Service::find($id);
        $data['services'] = Service::all();
        return view('site.single_services', compact('data'));
    }
}
