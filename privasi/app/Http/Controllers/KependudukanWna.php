<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validasiWna;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;

class KependudukanWna extends Controller
{

    public function indexWna(){
    return view('admin/rw/wna');    
    }   

    public function action(validasiWna $validasi){
        
        DB::table('tbl_lahir')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pll'),
             'P' => Input::get('plp'),
             'penduduk' => "WNA")
        );

           DB::table('tbl_mati')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('ml'),
             'P' => Input::get('mp'),
             'penduduk' => "WNA")
        );

           DB::table('tbl_pendatang')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pl'),
             'P' => Input::get('pp'),
             'penduduk' => "WNA")
        );

           DB::table('tbl_pindah')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pil'),
             'P' => Input::get('pip'),
             'penduduk' => "WNA")
        );

           return redirect('/dashbord');
    }



}
