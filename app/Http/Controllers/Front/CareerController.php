<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCareer;
use App\Http\Requests\StoreContact;
use App\Models\Career;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    use PhotoTrait;
    public function index()
    {
        return view('site.career');
    }

    public function storeCareer(StoreCareer $request)
    {
        $inputs = $request->all();

        if($request->hasFile('file'))
        {
            $inputs['file'] = $this->saveImage($request->file, 'assets/front/images/', 'photo');
        }

        if(Career::create($inputs))
        {
            return response()->json(['status' => 200]);
        }
        else
        {
            return response()->json(['status' => 405]);
        }
    }
}
