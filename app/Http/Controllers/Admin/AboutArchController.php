<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateAboutArchRequest;
use App\Models\AboutArch;
use Illuminate\Http\Request;
use App\Traits\PhotoTrait;

class AboutArchController extends Controller
{
    use PhotoTrait;

    public function index(){
        $about_arch = AboutArch::first();
        return view('admin.about_archs.index',compact('about_arch'));
    }

    public function update(UpdateAboutArchRequest $request)
    {
        $about_arch = AboutArch::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('image'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$about_arch->image)) {
                unlink(('assets/uploads/admins/images/') .$about_arch->image);
            }
            $inputs['image'] =  $request->image != null ? $this->saveImage($request->image, 'assets/uploads/admins/images' , 'photo') : $inputs['image'];
        }

        if ($request->has('pdf'))
        {
            if (file_exists(public_path('assets/uploads/admins/pdf/') .$about_arch->pdf)) {
                unlink(('assets/uploads/admins/pdf/') .$about_arch->pdf);
            }
            $inputs['pdf'] =  $request->pdf != null ? $this->saveImage($request->pdf, 'assets/uploads/admins/pdf' , 'pdf') : $inputs['pdf'];
        }


        if ($about_arch->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
