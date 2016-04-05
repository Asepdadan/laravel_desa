<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiWni extends Request
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
        'pll' => 'required|numeric',
        'plp' => 'required|numeric',
        'ml' => 'required|numeric',
        'mp' => 'required|numeric',
        'pl' => 'required|numeric',
        'pp' => 'required|numeric',
        'pil' => 'required|numeric',
        'pip' => 'required|numeric',
        ];
    }

    public function messages(){
        return [
        'pll.required' => 'isian jumlah penduduk lahir laki laki tidak boleh kosong',
        'pll.numeric' => 'format isian  penduduk lahir laki laki  harus bernilai angka',
        'plp.required' => 'isian jumlah penduduk lahir  perempuan tidak boleh kosong',
        'plp.numeric' => 'format isian  penduduk lahir  perempuan  harus bernilai angka',
        'ml.required' => 'isian jumlah mati laki laki tidak boleh kosong',
        'ml.numeric' => 'format isian  mati laki laki  harus bernilai angka',
        'mp.required' => 'isian jumlah mati  perempuan tidak boleh kosong',
        'mp.numeric' => 'format isian  mati perempuan  harus bernilai angka',
        'pl.required' => 'isian jumlah pendatang laki laki tidak boleh kosong',
        'pl.numeric' => 'format isian  pendatang perempuan  harus bernilai angka',
        'pp.required' => 'isian jumlah pendatang laki laki tidak boleh kosong',
        'pp.numeric' => 'format isian  pendatang perempuan  harus bernilai angka',
        'pil.required' => 'isian jumlah pindah  laki laki tidak boleh kosong',
        'pil.numeric' => 'format isian  pindah perempuan  harus bernilai angka',
        'pip.required' => 'isian jumlah pindah  laki laki tidak boleh kosong',
        'pip.numeric' => 'format isian pindah perempuan  harus bernilai angka'

        ];
    }
}
