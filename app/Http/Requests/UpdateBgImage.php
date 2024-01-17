<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBgImage extends FormRequest
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
            'about_img' => 'image',
            'service_img' => 'image',
            'product' => 'image',
            'career' => 'image',
            'news_img' => 'image',
            'contact_img' => 'image',
            'faqs_img' => 'image',
            'quote_img' => 'image',
        ];
    }

    public function messages()
    {
        return [
            'about_img.image' => 'يجب ان تكون صورة',
            'service_img.image' => 'يجب ان تكون صورة',
            'product.image' => 'يجب ان تكون صورة',
            'career.image' => 'يجب ان تكون صورة',
            'news_img.image' => 'يجب ان تكون صورة',
            'contact_img.image' => 'يجب ان تكون صورة',
            'faqs_img.image' => 'يجب ان تكون صورة',
            'quote_img.image' => 'يجب ان تكون صورة',
        ];
    }
}
