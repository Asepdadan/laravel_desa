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

class DataKependudukanPendidikan extends Controller
{
    //
     public function index()
    {
          $pendidikanWna= DB::table('tbl_jumlah_pendidikan')
                    ->join('tbl_pendidikan', function ($join) {
                        $join->on('tbl_jumlah_pendidikan.pendidikan_id', '=', 'tbl_pendidikan.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNA')
                    ->get();
            $pendidikanWni= DB::table('tbl_jumlah_pendidikan')
                    ->join('tbl_pendidikan', function ($join) {
                        $join->on('tbl_jumlah_pendidikan.pendidikan_id', '=', 'tbl_pendidikan.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNI')
                    ->get();
        return view('admin/rw/data/pendidikan')->with(array('pendidikanWna' => $pendidikanWna,'pendidikanWni' => $pendidikanWni));

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
                    return redirect('/data-agama')->with('message','Silahkan isi dulu waktu range nya');
                }else{

                  $data= DB::table('tbl_jumlah_agama')
                    ->join('tbl_agama', function ($join) {
                        $join->on('tbl_jumlah_agama.agama_id', '=', 'tbl_agama.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                ->whereBetween('waktu', [$start,$end])
                ->get();
                return view('admin/rw/data/agama')->with(array('data' => $data));
    
                }
                
    }

}
