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
        ];
    }
}
