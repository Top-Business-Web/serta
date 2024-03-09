<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNewsRequest extends FormRequest
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
            'files' => 'required|array',
            'main_image' => 'required|image',
        ];
    }

    public function messages()
    {
        return [
            'title_ar.required' => 'العنوان بالعربي مطلوب',
            'title_en.required' => 'العنوان بالانكليزي مطلوب',
            'files.required' => 'الصور مطلوبة',
            'main_image.required' => 'الصور مطلوبة',
            'main_image.image' => 'يجب ان تكون صورة',
        ];
    }
}
