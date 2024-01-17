<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuote;
use App\Models\Quote;


class QuoteController extends Controller
{
    public function index()
    {
        return view('site.quotation');
    }

    public function storeQuote(StoreQuote $request)
    {
        $inputs = $request->all();

        if(Quote::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
