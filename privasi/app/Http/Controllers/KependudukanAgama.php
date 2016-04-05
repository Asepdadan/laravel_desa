<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasiAgama;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;


class KependudukanAgama extends Controller
{
    //

    public function action(validasiAgama $validasi){
        
         //jumlah umpi
        DB::table('tbl_jumlah_umpi')->insert(
        array('rw_id' => Input::get('rw_id'), 'wna' => Input::get('wna'),'wni' => Input::get('wni'))
        );
       //jumlah umpi


       //jumlah penduduk
        DB::table('tbl_jumlah_penduduk')->insert(
        array('rw_id' => Input::get('rw_id'), 'L' => Input::get('l'),'P' => Input::get('p'))
        );  
       //jumlah penduduk
    
        
    }

    public function actionAgama(validasiAgama $validasi){
         //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 1 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('1'))
        );
       //jumlah agama
        
        //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 2 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('2'))
        );
       //jumlah agama

        //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 3 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('3'))
        );
       //jumlah agama

        //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 4 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('4'))
        );
       //jumlah agama

        //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 5 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('5'))
        );
       //jumlah agama

        //jumlah agama1
        DB::table('tbl_jumlah_agama')->insert(
        array('agama_id' => 6 ,'rw_id' => Input::get('rw_id'),'jumlah' => Input::get('6'))
        );
       //jumlah agama

    }

}
