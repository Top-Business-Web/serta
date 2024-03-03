<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArchRequest extends FormRequest
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
            'name' => 'required',
            'adjective' => 'required',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric|min:11',
            'location' => 'required',
            'category' => 'required',
            'subject' => 'required',
            'space' => 'required|numeric',
            'dimensions' => 'required|numeric',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب.',
            'adjective.required' => 'حقل الصفة مطلوب.',
            'email.required' => 'حقل البريد الإلكتروني مطلوب.',
            'email.email' => 'يجب أن يكون البريد الإلكتروني عنوان بريد إلكتروني صالحًا.',
            'email.max' => 'يجب ألا يتجاوز البريد الإلكتروني 255 حرفًا.',
            'phone.required' => 'حقل الهاتف مطلوب.',
            'phone.numeric' => 'يجب أن يكون الهاتف قيمة رقمية.',
            'phone.min' => 'يجب أن يحتوي الهاتف على الأقل 11 رقمًا.',
            'location.required' => 'حقل الموقع مطلوب.',
            'category.required' => 'حقل الفئة مطلوب.',
            'category.required' => 'حقل الموضوع مطلوب.',
            'space.required' => 'حقل المساحة مطلوب.',
            'space.numeric' => 'يجب أن تكون المساحة قيمة رقمية.',
            'dimensions.required' => 'حقل الأبعاد مطلوب.',
            'dimensions.numeric' => 'يجب أن تكون الأبعاد قيمة رقمية.',
        ];
    }
}
