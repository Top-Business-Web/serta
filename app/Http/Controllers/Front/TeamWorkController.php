<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeamWorkController extends Controller
{
    public function index()
    {
        return view('site.team_work');
    }
}
