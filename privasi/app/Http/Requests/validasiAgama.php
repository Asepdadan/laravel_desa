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
        'wni' => 'required|numeric',
        'wna' =>'required|numeric',
        'l' => 'required|numeric',
        'p' => 'required|numeric',
        '1' =>  'required|numeric',
        '2' => 'required|numeric',
        '3' =>  'required|numeric',
        '4' =>'required|numeric',
        '5'=>  'required|numeric'

        ];
    }

    public function messages(){
        return [
        'wni.required' => 'isian jumlah wni tidak boleh kosong',
        'wni.numeric' => 'format isian wni harus bernilai angka',
        'wna.required' => 'isian jumlah wna tidak boleh kosong',
        'wna.numeric' => 'format isian wna harus bernilai angka',
        'l.required' => 'isian jumlah laki laki tidak boleh kosong',
        'l.numeric' => 'format isian laki laki harus bernilai angka',
        'p.required' => 'isian jumlah perempuan tidak boleh kosong',
        'p.numeric' => 'format isian perempuan harus bernilai angka',
        '1.required' => 'isian jumlah islam tidak boleh kosong',
        '1.numeric' => 'format isian islam harus bernilai angka',
        '2.required' => 'isian jumlah kristen Protestan tidak boleh kosong',
        '2.numeric' => 'format isian kristen protestan harus bernilai angka',
        '3.required' => 'isian jumlah kristen khatolik tidak boleh kosong',
        '3.numeric' => 'format isian kristen khatolik harus bernilai angka',
        '4.required' => 'isian jumlah hindu tidak boleh kosong',
        '4.numeric' => 'format isian hindu harus bernilai angka',
        '5.required' => 'isian jumlah budha tidak boleh kosong',
        '5.numeric' => 'format isian budha harus bernilai angka',
        ];

    }
}
