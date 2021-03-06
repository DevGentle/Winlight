<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductRequest extends Request
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

            'category_main_id' => 'required',
            'code' => 'required',
            'title' => 'required',
            'description' => 'required'

        ];
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'กรุณากรอกข้อมูลให้ครบถ้วน'
//        ];
//    }
}
