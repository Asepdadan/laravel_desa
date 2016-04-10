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
    
    public function index(){
         
           $pendidikan = DB::table('tbl_pendidikan')->get();
          return view('admin/kependudukan/pendidikan')->with(array('pendidikan' => $pendidikan));

    }

        public function indexPendidikan(){
         
           $pendidikan = DB::table('tbl_pendidikan')->get();
          return view('admin/rw/pendidikan')->with(array('pendidikan' => $pendidikan));

    }



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


      
return redirect('/umur');

    }

 

}
