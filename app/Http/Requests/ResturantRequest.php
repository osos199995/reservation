<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResturantRequest extends FormRequest
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
            'name' => 'required|unique:vendors|max:255',
            'name_ar' => 'required|unique:vendors|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',

            'image'=>'required|image',
            'category' =>'required',
            'option' =>'required',
        ];
    }
}
