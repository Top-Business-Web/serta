<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Models\Benefits;
use App\Models\NewsLetter;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Service;

class HomeController extends Controller
{
    public function index()
    {
        $data['sliders'] = Slider::all();
        $data['services'] = Service::all();
        $data['products'] = Product::all();
        $data['benefits'] = Benefits::all();
        return view('site.index', compact('data'));
    }

    public function storeNews(NewsStore $request)
    {
        $inputs = $request->all();

        if(NewsLetter::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
