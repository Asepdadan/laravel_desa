<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class validasiLogin extends Request
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
            'username' => 'required|unique:tbl_user,username',
            'password' => 'required|'

        ];
    }

    public function messages(){
        return [
        'username.required' => 'Username tidak boleh kosong',
        'username.unique' => 'Username harus terdaftar',
        'password.required' => 'Password tidak boleh kosong'
        ];

    }
}
