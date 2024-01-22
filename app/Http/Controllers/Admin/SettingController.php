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

        if ($request->has('logo_vision'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->logo_vision)) {
                unlink(('assets/uploads/admins/images/') .$settings->logo_vision);
            }
            $inputs['logo_vision'] =  $request->logo_vision != null ? $this->saveImage($request->logo_vision, 'assets/uploads/admins/images' , 'photo') : $inputs['logo_vision'];
        }

        if ($request->has('logo_mission'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->logo_mission)) {
                unlink(('assets/uploads/admins/images/') .$settings->logo_mission);
            }
            $inputs['logo_mission'] =  $request->logo_mission != null ? $this->saveImage($request->logo_mission, 'assets/uploads/admins/images' , 'photo') : $inputs['logo_mission'];
        }

        if ($request->has('logo_values'))
        {
            if (file_exists(public_path('assets/uploads/admins/images/') .$settings->logo_values)) {
                unlink(('assets/uploads/admins/images/') .$settings->logo_values);
            }
            $inputs['logo_values'] =  $request->logo_values != null ? $this->saveImage($request->logo_values, 'assets/uploads/admins/images' , 'photo') : $inputs['logo_values'];
        }


        if ($settings->update($inputs))
            return response()->json(['status' => 200]);
        else
            return response()->json(['status' => 405]);
    }
}
