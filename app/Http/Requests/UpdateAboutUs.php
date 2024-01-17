<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAboutUs extends FormRequest
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
            'image' => 'nullable|image',
            'img' => 'nullable|image',
            'top_title_ar' => 'required',
            'top_title_en' => 'required',
            'top_desc_ar' => 'required',
            'top_desc_en' => 'required',
            'happy_clients' => 'required',
            'title_ar' => 'required',
            'title_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'year_ex' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'image.required' => 'الصورة مطلوبة',
            'top_title_ar.required' => 'العنوان العلوي بالعربي مطلوب',
            'top_title_en.required' => 'العنوان العلوي بالانجليزي مطلوب',
            'top_desc_ar.required' => 'الوصف العلوي بالعربي مطلوب',
            'top_desc_en.required' => 'الوصف العلوي بالانجليزي مطلوب',
            'happy_clients.required' => 'مطلوب ادخال عدد',
            'title_ar.required' => 'العنوان بالعربي مطلوب',
            'title_en.required' => 'العنوان بالانجليزي مطلوب',
            'desc_ar.required' => 'الوصف بالعربي مطلوب',
            'desc_en.required' => 'الوصف بالانجليزي مطلوب',
            'year_ex.required' => 'حقل الخبرة مطلوب',
        ];
    }

}
