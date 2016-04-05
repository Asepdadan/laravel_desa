<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasiPendidikan;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;
class KependudukanPendidikan extends Controller
{
    //

    public function pendidikan(validasiPendidikan $validasi){

        /*pendidikan wni 1*/
         DB::table('tbl_jumlah_pendidikan')->insert(
        array('pendidikan_id' => input::get('pendidikan_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnil'),
             'P' => Input::get('wnip'),
             'penduduk' => "WNI")
        );

        /*pendidikan wna 1*/
       DB::table('tbl_jumlah_pendidikan')->insert(
        array('pendidikan_id' => input::get('pendidikan_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnal'),
             'P' => Input::get('wnap'),
             'penduduk' => "WNA")
        );


      


    }

 public function pencaharian(validasiPendidikan $validasi){

        /*pencaharian wni 1*/
         DB::table('tbl_jumlah_mata_pencaharian')->insert(
        array('pencaharian_id' => input::get('pencaharian_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnil'),
             'P' => Input::get('wnip'),
             'penduduk' => "WNI")
        );

        /*pencaharian wna 1*/
       DB::table('tbl_jumlah_mata_pencaharian')->insert(
        array('pencaharian_id' => input::get('pencaharian_id'),
            'rw_id' => Input::get('rw_id'),
             'L' => Input::get('wnal'),
             'P' => Input::get('wnap'),
             'penduduk' => "WNA")
        );

       
      


    }


}
