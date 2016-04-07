<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use App\Http\Requests\validasiLogin;
use Illuminate\Support\Facades\Input;
use Redirect;


class Login extends Controller
{
    //
    public function login(validasiLogin $validasi){
        if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){

                if(Auth::User()->hak_akses=="admin"){
                   return redirect('/dashbord');
                }else{
                    return redirect('/dashbord');
                    //return Auth::user();
                }

        }else{
             return Redirect::to('/login')->with('message', 'Login Gagal Username Atau Password Tidak Terdaftar');
        }



    }


      

}
