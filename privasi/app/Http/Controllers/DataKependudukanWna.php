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

class DataKependudukanWna extends Controller
{
    //
       public function index()
    {
          $lahir= DB::table('tbl_lahir')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_lahir.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNA')
                    ->get();
            $mati= DB::table('tbl_mati')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_mati.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNA')
                    ->get();
            $pendatang = DB::table('tbl_pendatang')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_pendatang.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNA')
                    ->get();

              $pindah = DB::table('tbl_pindah')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_pindah.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id);
                    })
                    ->where('penduduk','WNA')
                    ->get();

        return view('admin/rw/data/wna')->with(array('lahir' => $lahir,'mati' => $mati,'pendatang' => $pendatang,'pindah' => $pindah));

    }

     public function action(){


                $start = Input::get('start');
                $end = Input::get('end');
                $mytime = Carbon\Carbon::now('Asia/Jakarta');
                $month= $mytime->month;
                $day= $mytime->day;
                $knownDate = $mytime->create(2016,$month,31,0);          // create testing date
                $mytime->setTestNow($knownDate);                        // set the mock

                if(empty($_POST)){
                    return redirect('/data-wna')->with('message','Silahkan isi dulu waktu range nya');
                }else{

                  $lahir= DB::table('tbl_lahir')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_lahir.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                    ->where('penduduk','WNA')
                ->whereBetween('waktu', [$start,$end])
                ->get();


                  $mati = DB::table('tbl_mati')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_mati.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                    ->where('penduduk','WNA')
                ->whereBetween('waktu', [$start,$end])
                ->get();


                  $pendatang = DB::table('tbl_pendatang')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_pendatang.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                    ->where('penduduk','WNA')
                ->whereBetween('waktu', [$start,$end])
                ->get();

                $pindah = DB::table('tbl_pindah')
                    ->join('tbl_rw', function ($join) {
                        $join->on('tbl_pindah.rw_id', '=', 'tbl_rw.id')
                             ->where('rw_id', '=', Auth::user()->id );
                    })
                    ->where('penduduk','WNA')
                ->whereBetween('waktu', [$start,$end])
                ->get();

                return view('admin/rw/data/wna')->with(array('lahir' => $lahir,'mati' => $mati,'pendatang' => $pendatang,'pindah' => $pindah));
    
                }
                
    }



}
