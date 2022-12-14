<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'fullname' => 'required|min:3|max:20',
            'email' => 'required|email',
            'subject' => 'required|min:10|max:100',
            'phone' => 'required|digits_between:9,12',
            'query' => 'required|min:10|max:500',
        ];
    }
}
