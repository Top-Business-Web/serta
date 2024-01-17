<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
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
            'sub_title_ar' => 'required',
            'sub_title_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'files' => 'array|required|min:1',
            'details' => 'required',
            'sub_categories_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'عنوان المنتج بالعربي مطلوب',
            'title_en.required' => 'عنوان المنتج بالانجليزي مطلوب',
            'sub_title_ar.required' => 'العنوان الفرعي بالعربي مطلوب',
            'sub_title_en.required' => 'العنوان الفرعي بالانجليزي مطلوب',
            'desc_ar.required' => 'الوصف بالعربي مطلوب',
            'desc_en.required' => 'الوصف بالانجليزي مطلوب',
            'files.image' => 'يجب ان تكون صورة',
            'details.required' => 'التفاصيل مطلوبة',
            'sub_categories_id.required' => 'يجب تحديد الفة الفرعية'
        ];
    }
}
