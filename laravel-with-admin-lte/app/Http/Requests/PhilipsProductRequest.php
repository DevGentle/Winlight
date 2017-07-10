<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PhilipsProductRequest extends Request
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
            'code' => 'required',
            'title' => 'required'
        ];
    }

//    public function messages()
//    {
//        return [
//            'title.required' => 'กรุณากรอกข้อมูลให้ครบถ้วน'
//        ];
//    }
}
