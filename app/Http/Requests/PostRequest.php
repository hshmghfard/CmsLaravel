<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PostRequest extends Request
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

            'post_title' => 'required',
            'post_img' => 'required|max:300',
            'post_mintext' => 'required',
            'post_content' => 'required'
            //
        ];
    }

    public function attributes(){

        return [

            'post_title' => 'عنوان نوشته',
            'post_img' => 'تصویر نوشته',
            'post_mintext' => 'توضیح کوتاه',
            'post_content' => 'متن نوشته'

        ];

    }

    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. ',
            'post_img.max' => 'حجم تصویر انتخاب شده برای نوشته باید حداکثر :max باشد.',
            'post_img.mimes' => ':attribute باید یکی از فرمت های :values باشد.'

        ];

    }

}
