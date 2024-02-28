<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class yoxlama extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "ad"=>"required|min:7"
        ];
    }
    public function messages()
{
    return [
 'ad.required'=>"Ad bos ola bilmez!",
 'ad.between'=>"5-8",
 'text.required'=>"Bos ola bilmez"
    ];
}
}
