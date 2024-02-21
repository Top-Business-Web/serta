<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'customer_ar' => 'required',
            'customer_en' => 'required',
            'desc_ar' => 'required',
            'desc_en' => 'required',
            'images' => 'image|nullable',
            'sub_categories_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'عنوان المنتج بالعربي مطلوب',
            'title_en.required' => 'عنوان المنتج بالانجليزي مطلوب',
            'customer_ar.required' => 'اسم العميل بالعربي مطلوب',
            'customer_en.required' => 'اسم العميل بالانجليزي مطلوب',
            'desc_ar.required' => 'الوصف بالعربي مطلوب',
            'desc_en.required' => 'الوصف بالانجليزي مطلوب',
            'images.image' => 'يجب ان تكون صورة',
            'sub_categories_id.required' => 'يجب تحديد الفة الفرعية'
        ];
    }
}
