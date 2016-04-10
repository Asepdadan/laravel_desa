<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiAgama extends Request
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
            //
        '1' => 'numeric|required',
        '2' => 'numeric|required',
        '3' => 'numeric|required',
        '4' => 'numeric|required',
        '5' => 'numeric|required',
        '6' => 'numeric|required'
        ];
    }

    public function messages(){
        return [
        '1.required' => "isian Islam tidak boleh kosong",
        '2.required' => "isian kristen protestan tidak boleh kosong",
        '3.required' => "isian kristen khatolik tidak boleh kosong",
        '4.required' => "isian hindu tidak boleh kosong",
        '5.required' => "isian budha tidak boleh kosong",
        '6.required' => "isian lain-lain tidak boleh kosong",
        '1.numeric' => "isian islam harus angkat",
        '2.numeric' => "isian kristen Protestan harus angkat",
        '3.numeric' => "isian kristen Khatolik harus angkat",
        '4.numeric' => "isian hindu harus angkat",
        '5.numeric' => "isian budha harus angkat",
        '6.numeric' => "isian lain lain harus angkat"
        ];


    }
}
