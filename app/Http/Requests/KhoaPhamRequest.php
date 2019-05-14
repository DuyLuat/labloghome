<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KhoaPhamRequest extends FormRequest
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
            'txtmonhoc'=>'required|unique:khoapham,monhoc',
            'txtgiatien'=>'required|number',
            'txtgiangvien'=>'required'
        ];
    }

    public function messages(){
        return [
            'txtmonhoc.required'=>'Bạn chưa nhập tên môn học',
            'txtmonhoc.unique'=>'Tên môn học đã tồn tại.',
            'txtgiatien.required'=>'Bạn chưa nhập giá tiên',
            'txtgiatien.number'=>'Giá trị phải là số',
            'txtgiangvien.required'=>'Bạn chưa nhập giảng viên'
        ];
    }
}
