<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\validasiUmur;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;
class KependudukanUmur extends Controller
{
    //
       public function __construct()
    {
        $this->middleware('admin');
    }

        public function umur(validasiUmur $validasi){

        /*umur wni 1*/
         DB::table('tbl_jumlah_umur')->insert(
        array('umur_id' => input::get('umur_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnil'),
             'P' => Input::get('wnip'),
             'penduduk' => "WNI")
        );

        /*umur wna 1*/
       DB::table('tbl_jumlah_umur')->insert(
        array('umur_id' => input::get('umur_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnal'),
             'P' => Input::get('wnap'),
             'penduduk' => "WNA")
        );


      


    }
}
