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

class KependudukanMataPencaharian extends Controller
{
    //
    public function index(){

           $pencaharian = DB::table('tbl_pencaharian')->get();
          return view('admin/kependudukan/mata_pencaharian')->with(array( 'pencaharian' => $pencaharian));
    }

    public function indexMataPencaharian(){

           $pencaharian = DB::table('tbl_pencaharian')->get();
          return view('admin/rw/mata_pencaharian')->with(array( 'pencaharian' => $pencaharian));
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

       
      
       return redirect('/dashbord');

    }
}
