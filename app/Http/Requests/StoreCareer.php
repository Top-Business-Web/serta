<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCareer extends FormRequest
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
            'file' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'salary' => 'required',

        ];
    }
    public function messages(){

        return [
            'file.required' => 'الملف مطلوب',
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'الايميل مطلوب',
            'email.email' => 'يجب ان يكون ايميل صحيح',
            'phone.required' => 'الرقم مطلوب',
            'phone.min' => 'يجب ان يكون 11 رقم على الاقل',
            'salary.required' => 'المرتب مطلوب'
        ];
    }
}
