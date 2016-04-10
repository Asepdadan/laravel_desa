<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiPenduduk extends Request
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
        'rw_id' => 'required',
        'wna' => 'required|numeric',
        'wni' => 'required|numeric',
        'l' => 'required|numeric',
        'p' => 'required|numeric',
        ];
    }

    public function messages(){
        'wna.required' => "Isian pada wna tidak boleh kosong",
        'wna.required' => "Isian pada wna tidak boleh kosong",
        'l.required' => "Isian pada laki laki tidak boleh kosong",
        'p.required' => "Isian pada perempuan tidak boleh kosong",
        'wna.numeric' => "isian wna harus angka",
        'wni.numeric' => "isian wni harus angka",
        'l.numeric' => "isian laki laki harus angka",
        'p.numeric' => "isian perempuan harus angka",
    }
}
