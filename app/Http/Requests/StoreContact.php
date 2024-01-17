<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContact extends FormRequest
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
            'email' => 'email|required',
            'phone' => 'required|min:11',
            'subject' => 'required',
            'message' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'الاسم مطلوب',
            'email.required' => 'الايميل مطلوب',
            'email.email' => 'يجب ان يكون ايميل',
            'phone.required' => 'الهاتف مطلوب',
            'phone.min' => 'يجب أن يكوم 11 رقم على الاقل',
            'subject.required' => 'الموضوع مطلوب',
            'message.required' => 'الرسالة مطلوب',
        ];
    }

}
