<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class QustionRequest extends Request
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
            'qu_content' => 'required',
            'qu_category' => 'required'
        ];
    }


    public function attributes(){

        return [

            'qu_content' => 'متن سوال',
            'qu_category' => 'بخش دسته'
        ];

    }

    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. '
        ];

    }

}
