<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutUs;
use App\Models\About;
use App\Models\Setting;
use App\Traits\PhotoTrait;

class AboutUsController extends Controller
{
    use PhotoTrait;

    public function index(){
        $about_us = About::first();
        return view('admin.about_us.index',compact('about_us'));
    }

    public function update(UpdateAboutUs $request)
    {
        $about_us = About::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('image'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$about_us->image)) {
                unlink(('assets/uploads/admins/images/') .$about_us->image);
            }
            $inputs['image'] =  $request->image != null ? $this->saveImage($request->image, 'assets/uploads/admins/images' , 'photo') : $inputs['image'];
        }

        if ($request->has('img'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$about_us->img)) {
                unlink(('assets/uploads/admins/images/') .$about_us->img);
            }
            $inputs['img'] =  $request->img != null ? $this->saveImage($request->img, 'assets/uploads/admins/images' , 'photo') : $inputs['img'];
        }


        if ($about_us->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
