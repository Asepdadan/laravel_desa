<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;
class InputKependudukan extends Controller
{
    //
    public function index(){
    $agama = DB::table('tbl_agama')->get();
    $pendidikan = DB::table('tbl_pendidikan')->get();
    $pencaharian = DB::table('tbl_pencaharian')->get();
    $umur = DB::table('tbl_umur')->get();
    return view('admin/kependudukan/InputKependudukan')->with(array('agama' => $agama,'pendidikan' => $pendidikan,'pencaharian' => $pencaharian,'umur' => $umur));        
    }

    public function action(){
        print_r($_POST);
    }

}
