<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class StoreCustomerRequest extends FormRequest
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
            'name' => 'bail|required|min:3|max:10',
            'gender' => 'required|boolean',
            'dob' => 'required|date|after:yesterday',
        ];
    }


    /**
     * Customize Error Messages
     * @return array
     */
    public function messages()
    {
        return [

            'name.required' => 'name is requiredd',
            'name.min' => 'min three',

        ];
    }


}
