<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class LearningRequest extends Request
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
            'request_title' => 'required',
            'request_content' => 'required'
        ];
    }

    public function attributes(){

        return [

            'request_title' => 'عنوان درخواست',
            'request_content' => 'محتوای درخواست'

        ];

    }


    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. '

        ];

    }

}
