<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateBgImage;
use App\Models\BgImage;
use App\Traits\PhotoTrait;

class BgImageController extends Controller
{
    use PhotoTrait;

    public function index(){
        $images = BgImage::get();
        return view('admin.bg_images.index', compact('images'));
    }

    public function update(UpdateBgImage $request)
    {
        $images = BgImage::findOrFail($request->id);

        $inputs = $request->all();

        $imageFields = ['about_img', 'service_img', 'product_img', 'career_img', 'news_img', 'contact_img', 'faqs_img', 'qoute_img', 'architecture_img', 'news_img'];
        foreach ($imageFields as $field) {
            if ($request->has($field)) {
                $inputs[$field] = $request->$field != null ? $this->saveImage($request->$field, 'assets/uploads/admins/background', 'photo') : $inputs[$field];
            }
        }

        return $images->update($inputs) ? response()->json(['status' => 200]) : response()->json(['status' => 405]);
    }


}
