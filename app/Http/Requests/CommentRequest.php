<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CommentRequest extends Request
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
            'comment_content' => 'required'
        ];
    }

    public function attributes(){

        return [

            'comment_content' => 'محتوای دیدگاه'

        ];

    }

    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. ',

        ];

    }

}
