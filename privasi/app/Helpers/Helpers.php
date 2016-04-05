<?php

namespace App\Helpers;
use DB;


class Helpers{

public static function Hitung(){
$agama = DB::table('tbl_jumlah_agama')->count();
return $agama;
}

public static function HitungAgamaLakiLaki(){
$agama = DB::table('tbl_jumlah_agama')->where('agama_id', '=', 1)
                                                                        ->where('rw_id', '=', 1)
                                                                        ->first();
                                                                        
return $agama;
}





}



?>