<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validasiAgama;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;


class KependudukanAgama extends Controller
{

  public function index(){
    $data = DB::table('tbl_agama')->get();
    return view('admin/kependudukan/agama')->with(array('data' => $data));
  }

  public function indexAgama(){
    $data = DB::table('tbl_agama')->get();
    return view('admin/rw/agama')->with(array('data' => $data));
  }

    public function actionAgama(){
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

        return redirect('/dashbord');
    }

}
