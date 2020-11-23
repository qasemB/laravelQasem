<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreShope extends FormRequest
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
            'title'=> 'required|between:8,50|regex:/^[ا-یa-zA-Z0-9\-۰−۹ي−،., ]+$/u',
            'description'=> 'required|max:2000|regex:/^[ا-یa-zA-Z0-9\-۰−۹ي−،., ]+$/u',
            'price'=> 'required|numeric|min:10',
            'image'=> 'required|mimes:png,jpg,jpeg|between:50,5000'
        ];
    }
}
