<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
/*    public function __construct(){
     $this->middleware('admin');
    }*/

    public function berita(){
        return view('admin/berita/berita');    

    }

}
