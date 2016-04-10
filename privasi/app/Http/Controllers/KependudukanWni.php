<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasiWni;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;
class KependudukanWni extends Controller
{

    public function indexWni(){
         return view('admin/rw/wni');
    }

   public function action(validasiWni $validasi){
        
        DB::table('tbl_lahir')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pll'),
             'P' => Input::get('plp'),
             'penduduk' => "WNI")
        );

           DB::table('tbl_mati')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('ml'),
             'P' => Input::get('mp'),
             'penduduk' => "WNI")
        );

           DB::table('tbl_pendatang')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pl'),
             'P' => Input::get('pp'),
             'penduduk' => "WNI")
        );

           DB::table('tbl_pindah')->insert(
        array('rw_id' => Input::get('rw_id'),
             'L' => Input::get('pil'),
             'P' => Input::get('pip'),
             'penduduk' => "WNI")
        );

        return   redirect('/dashbord');
    }


}
