<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\PartnerSuccess;
use Illuminate\Http\Request;

class PartnerSuccessController extends Controller
{
    public function index()
    {
        $partners_success = PartnerSuccess::query()->select('id', 'image', 'second_image')->get();
        return view('site.partner_success', compact('partners_success'));
    }
}
