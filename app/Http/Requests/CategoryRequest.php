<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryRequest extends Request
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
            'category_name' => 'required',
            'category_enname' => 'required',
        ];
    }


    public function attributes(){

        return [

            'category_name' => 'نام دسته',
            'category_enname' => 'نام انگلیسی دسته',

        ];

    }

    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. ',

        ];

    }

}
