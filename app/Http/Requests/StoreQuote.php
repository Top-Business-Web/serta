<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreQuote extends FormRequest
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:11',
            'company' => 'nullable',

        ];
    }
    public function messages(){

        return [
            'first_name.required' => 'الاسم الاول مطلوب',
            'last_name.required' => 'الاسم الاخير مطلوب',
            'email.required' => 'الايميل مطلوب',
            'email.email' => 'يجب ان يكون ايميل صحيح',
            'phone.required' => 'الرقم مطلوب',
            'phone.min' => 'يجب ان يكون 11 رقم على الاقل',
        ];
    }
}
