<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSlider extends FormRequest
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
            'title_ar' => 'required',
            'title_en' => 'required',
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'image.image' => 'يجب ان تكون صورة',
            'title_ar.required' => 'العنوان بالعربي مطلوب',
            'title_en.required' => 'العنوان بالانجليزي مطلوب',
            'sub_title_ar.required' => 'العنوان الفرعي بالعربي مطلوب',
            'sub_title_en.required' => 'العنوان الفرعي بالانجليزي مطلوب',
        ];
    }
}
