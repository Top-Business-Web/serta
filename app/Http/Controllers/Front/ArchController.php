<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Models\About;
use App\Models\Benefits;
use App\Models\Category;
use App\Models\Certificate;
use App\Models\Faqs;
use App\Models\NewsLetter;
use App\Models\PartnerSuccess;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Service;
use App\Models\SubCategory;

class ArchController extends Controller
{
    public function architecture()
    {
        return view('site.architecture');
    }

    public function details($id){
        return view('site.arch-details');
    }

}
