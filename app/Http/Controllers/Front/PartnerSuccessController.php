<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PartnerSuccessController extends Controller
{
    public function index()
    {
        return view('site.partner_success');
    }
}
