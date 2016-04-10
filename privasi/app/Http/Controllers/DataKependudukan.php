<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use DB;
use Redirect;
use View;
use Carbon;
class DataKependudukan extends Controller
{
    //
    public function index()
    {
        
    return view('admin/rw/data/data');

    }

    public function action(){
        $start = $_POST['start'];
                        $end = $_POST['end'];
                        echo $start;
                        $mytime = Carbon\Carbon::now('Asia/Jakarta');
                        $month= $mytime->month;
                $day= $mytime->day;
                        $knownDate = $mytime->create(2016,$month,31,0);          // create testing date
                $mytime->setTestNow($knownDate);                        // set the mock
                
                        /*$data = DB::table('tbl_jumlah_agama')
                                    ->join('tbl_agama', 'tbl_jumlah_agama.agama_id', '=', 'tbl_agama.id')
                                    ->select('tbl_jumlah_agama.*', 'tbl_agama.agama', 'tbl_jumlah_agama.jumlah','tbl_jumlah_agama.rw_id','tbl_jumlah_agama.waktu')
                                    ->whereBetween('waktu', ['2016-03-01','2016-04-31'])

                                    ->get();
*/
                      $data= DB::table('tbl_jumlah_agama')
                        ->join('tbl_agama', function ($join) {
                            $join->on('tbl_jumlah_agama.agama_id', '=', 'tbl_agama.id')
                                 ->where('rw_id', '=', 3);
                        })
                    ->whereBetween('waktu', [$start,$end])
                    ->get();
                    return view('admin/rw/data/data')->with(array('data' => $data));


/*                               //print_r($data)     ;
                                          print_r($data1)     ;

                               
                               foreach ($data1 as $key) {
                                echo "<br><hr>";
                                   echo $key->agama;echo "<br>";
                                   echo $key->jumlah;echo "<br>";
                                   echo $key->rw_id;echo "<br>";
                                   echo $key->waktu;
                                   echo "<hr>";
                               }
*/

    }

}
