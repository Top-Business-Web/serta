<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSetting;
use App\Models\Setting;
use App\Traits\PhotoTrait;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    use PhotoTrait;

    public function index(){
        $settings = Setting::first();
        return view('admin.settings.index',compact('settings'));
    }

    public function update(StoreSetting $request)
    {
        $settings = Setting::findOrFail($request->id);

        $inputs = $request->all();

        if ($request->has('logo'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->logo)) {
                unlink(('assets/uploads/admins/images/') .$settings->logo);
            }
            $inputs['logo'] =  $request->logo != null ? $this->saveImage($request->logo, 'assets/uploads/admins/images' , 'photo') : $inputs['logo'];
        }

        if ($request->has('profile'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->profile)) {
                unlink(('assets/uploads/admins/images/') .$settings->profile);
            }
            $inputs['profile'] =  $request->profile != null ? $this->saveImage($request->profile, 'assets/uploads/admins/images' , 'photo') : $inputs['profile'];
        }

        if ($request->has('licenese'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->licenese)) {
                unlink(('assets/uploads/admins/images/') .$settings->licenese);
            }
            $inputs['licenese'] =  $request->licenese != null ? $this->saveImage($request->licenese, 'assets/uploads/admins/images' , 'photo') : $inputs['licenese'];
        }


        if ($settings->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
