<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSetting extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title_ar' => 'required',
            'title_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'logo' => 'image:png|nullable',
            'location_url' => 'required',
            'address_ar' => 'required',
            'address_en' => 'required',
            'open' => 'nullable',
            'email' => 'email|required',
            'phone' => 'required',
            'facebook' => 'nullable',
            'youtube' => 'nullable',
            'twitter' => 'nullable',
            'instagram' => 'nullable',
            'linkedin' => 'nullable',
            'profile' => 'nullable|mimes:pdf|max:10000',
            'licenese' => 'nullable|image:png',
            'logo_vision' => 'image:png|nullable',
            'logo_mission' => 'image:png|nullable',
            'logo_values' => 'image:png|nullable',
            'title_vision_ar' => 'nullable',
            'title_vision_en' => 'nullable',
            'desc_vision_ar' => 'nullable',
            'desc_vision_en' => 'nullable',
            'title_mission_ar' => 'nullable',
            'title_mission_en' => 'nullable',
            'desc_mission_ar' => 'nullable',
            'desc_mission_en' => 'nullable',
            'title_values_ar' => 'nullable',
            'title_values_en' => 'nullable',
            'desc_values_ar' => 'nullable',
            'desc_values_en' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'العنوان بالعربي مطلوب',
            'title_en.required' => 'العنوان بالانجليزي مطلوب',
            'desc_ar.required' => 'الوصف بالعربي مطلوب',
            'desc_en.required' => 'الوصف بالانجليزي مطلوب',
            'logo.image:png' => 'يجب ان تكون لاحقة Png',
            'location_url.required' => 'الموقع مطلوب',
            'address_ar.required' => 'المكان بالعربي مطلوب',
            'address_en.required' => 'المكان بالانجليزي مطلوب',
            'phone.required' => 'المكان بالانجليزي مطلوب',
            'email.required' => 'الايميل مطلوب',
            'email.email' => 'الايميل يجب ان يكون صحيح',
            'logo_vision.png' => 'يجب ان تكون PNG',
            'logo_mission.png' => 'يجب ان تكون PNG',
            'logo_values.png' => 'يجب ان تكون PNG',
        ];
    }
}
