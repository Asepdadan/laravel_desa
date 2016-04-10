<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validasiPenduduk;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use Session;
use View;

use App\Http\Requests;

class Penduduk extends Controller
{
    //
    public function index(){
    
    return view('admin/kependudukan/penduduk');
}

    public function indexPenduduk(){
    
    return view('admin/rw/penduduk');
    }

        public function action(validasiPenduduk $validasi){
        
      if(isset($_POST['penduduk'])){
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
        

        return redirect('/dashbord');
        
    }

}
