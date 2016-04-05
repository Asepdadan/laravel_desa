<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiPendidikan extends Request
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
        'wnil' => 'required|numeric',
        'wnip' => 'required|numeric',
        'wnal' =>'required|numeric',
        'wnap' =>'required|numeric'
        ];
    }

     public function messages(){
        return [
        'wnil.required' => 'isian jumlah wni laki laki tidak boleh kosong',
        'wnil.numeric' => 'format isian wni  laki laki  harus bernilai angka',
        'wnip.required' => 'isian jumlah wni perempuan tidak boleh kosong',
        'wnip.numeric' => 'format isian wni perempuan  harus bernilai angka',

        'wnal.required' => 'isian jumlah wni laki laki  tidak boleh kosong',
        'wnal.numeric' => 'format isian wni laki laki  harus bernilai angka',
        'wnap.required' => 'isian jumlah wni perempuan  tidak boleh kosong',
        'wnap.numeric' => 'format isian wni perempuan  harus bernilai angka'
        ];
    }
}
