<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;
use Carbon;
use Auth;

class DataKependudukanPenduduk extends Controller
{
    //
     public function index()
    {
          $data= DB::table('tbl_jumlah_penduduk')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_jumlah_penduduk.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })

                    ->get();
        return view('admin/rw/data/penduduk')->with(array('data' => $data));

    }

     public function action(){


                $start = Input::get('start');
                $end = Input::get('end');
                echo $start;
                $mytime = Carbon\Carbon::now('Asia/Jakarta');
                $month= $mytime->month;
                $day= $mytime->day;
                $knownDate = $mytime->create(2016,$month,31,0);          // create testing date
                $mytime->setTestNow($knownDate);                        // set the mock

                if(empty($_POST)){
                    return redirect('/data-kependudukan')->with('message','Silahkan isi dulu waktu range nya');
                }else{

                  $data= DB::table('tbl_jumlah_penduduk')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_jumlah_penduduk.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                ->whereBetween('waktu', [$start,$end])
                ->get();
                return view('admin/rw/data/penduduk')->with(array('data' => $data));
    
                }
                
    }


}
