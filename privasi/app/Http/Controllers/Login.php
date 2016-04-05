<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class Login extends Controller
{
    //
    public function login(){
        if(Auth::attempt(['username' => Input::get('username'), 'password' => Input::get('password')])){

                if(Auth::User()->hak_akses=="admin"){
                    echo "admin kelurahan";
                    return Auth::user();
                }else{
                    echo "RW";
                    return Auth::user();
                }

        }else{

            echo "gagal login";
        }



    }


      

}
