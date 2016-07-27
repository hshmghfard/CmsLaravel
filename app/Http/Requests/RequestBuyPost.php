<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RequestBuyPost extends Request
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
            'name' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
            'postal_code' => 'required|max:10|min:10'
        ];
    }

    public function attributes(){

        return [

            'name' => 'انم',
            'lname' => 'نام خانوادگی',
            'email' => 'ایمیل',
            'mobile' => 'موبایل',
            'address' => 'آدرس',
            'postal_code' => 'کد پستی'

        ];

    }


    public function messages(){

        return[

            'required' => ' :attribute وارد نشده است. ',
            'max' => ':attribute باید کمتر از 10 عدد باشد.',
            'min' => ':attribute تعداد اعداد باید بیشتر از این تعداد باشد.'

        ];

    }
}
