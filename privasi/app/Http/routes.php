<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
    $data = DB::table('tbl_berita')->paginate(2);
    return view('home/home')->with(array('data' => $data));
});

Route::get('/lokasi', function () {
    return view('peta_wilayah/lokasi');
});


Route::get('/profile', function () {
      $data = DB::table('tbl_data_saran')->get();
    return view('profile/profile')->with(array('data' => $data));
});

Route::get('/sejarah', function () {
  
    return view('sejarah/sejarah');
});

Route::get('/visi-misi', function () {
    return view('visi-misi/visi_misi');
});

Route::get('/sejarah', function () {
    return view('sejarah/sejarah');
});

Route::get('/data-statis', function () {
    return view('data-statis/data_statis');
});

Route::get('/data-dinamis', function () {
    return view('data-dinamis/data_dinamis');
});



Route::get('/posting-berita', function () {
    return view('admin/berita/berita');
});


Route::get('/kelola-berita', function () {
    $data = DB::table('tbl_berita')->get();
    return view('admin/berita/kelola')->with(array('data' => $data));
});


//admin


Route::post('/ActionBerita','PostingBerita@posting');



Route::get('export',function(){
$now = date('Y-m-d');

Excel::create('Laporan Kependudukan Cihapit - '.$now, function($excel) {

    // Call writer methods here
    $excel->sheet('Agama', function($sheet) {

        // Sheet manipulation
        $sheet->mergeCells('A1:P1');
        $sheet->mergeCells('A2:P2');
        $sheet->cells('A1:P1', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });
        $sheet->cells('A2:P2', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });
        $sheet->row(1, array(
             'DAFTAR REKAPITULASI JUMAH PENDUDUK KOTA BANDUNG'
        ));
        $sheet->row(2, array(
             'BERDASARKAN JUMLAH RT, RW DAN MENURUT GOLONGAN AGAMA'
        ));

        $sheet->mergeCells('A4:B4');
        $sheet->mergeCells('A5:B5');
        $sheet->mergeCells('A6:B6');
        $sheet->cells('A4:B6', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('left');
        });

         $sheet->row(4, array(
             'KELURAHAN','',' : Cihapit'
        ));
         $sheet->row(5, array(
             'KECAMATAN','', ': Bandung Wetan'
        ));

         $sheet->row(6, array(
             'PADA BULAN'
        ));

$sheet->mergeCells('A8:A9');
$sheet->mergeCells('B8:B9');
$sheet->mergeCells('C8:D8');
$sheet->mergeCells('E8:G8');
$sheet->mergeCells('H8:J8');
$sheet->mergeCells('K8:P8');

$sheet->setAutoSize(true);
$sheet->setSize('C8', 5, 15);
$sheet->setSize('D8', 5, 15);

$sheet->setSize('E8', 5, 15);
$sheet->setSize('F8', 5, 15);
$sheet->setSize('G8', 5, 15);
$sheet->setSize('H8', 5, 15);
$sheet->setSize('I8', 5, 15);
$sheet->setSize('J80', 5, 15);
   $sheet->cells('A8:P9', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });



$sheet->cells('A8:A9', function($cells) {
        // manipulate the range of cells
   $cells->setValignment('middle');


        });

$sheet->setBorder('C8:P14', 'thin');
$sheet->setBorder('A8:B14', 'thin','thin','thin','thick');
//$sheet->setBorder('A12:A17', 'thin');
//$sheet->setBorder('A12:B17', 'thin');
   
$sheet->row(8, array(
     'no', 'kelurahan','jumlah ','','Jumlah umpi','','', 'jumlah penduduk','','','Jumlah menurut golongan agama','','','','',''
));
$sheet->row(9, array(
    '', '','RT','RW','WNI','WNA','JML','L','P','JML','islam','kristen','khatolik','hindu','budha','Lain - lain'
));

     $sheet->cells('A12:P12', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
         $cells->setValignment('middle');
        });   

 $wni = DB::table('tbl_jumlah_umpi')
                    ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                    ->sum('WNI');
 $wna= DB::table('tbl_jumlah_umpi')
                    ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                    ->sum('WNA');
$jum = collect([$wni,$wna])->sum();

 $L = DB::table('tbl_jumlah_penduduk')
                    ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                    ->sum('L');


$sheet->row(12, array(
    '1', 'Cihapit','46','8',$wni,$wna,$jum,$L,'10','22','30','12','12','1','11','0'
));
       


    });


    $excel->sheet('WNA', function($sheet) {

        // Sheet manipulation

        

    });



})->export('xlsx');;


});

Route::get('exports','Export@export');
// query

//SELECT * FROM `tbl_jumlah_agama` WHERE month(waktu) = month(now())
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
    Route::get('/agama', function () {
    $req = DB::table('tbl_agama')->get();
    return view('admin/kependudukan/agama')->with(array('data' => $req));
});
Route::post('/ActionJumlahPenduduk', 'KependudukanAgama@action');
Route::post('/ActionJumlahAgama', 'KependudukanAgama@actionAgama');


Route::get('/pendidikan_mata_pencaharian', function () {

    $pendidikan = DB::table('tbl_pendidikan')->get();
    $pencaharian = DB::table('tbl_pencaharian')->get();
    return view('admin/kependudukan/pendidikan_pencaharian')->with(array('pendidikan' => $pendidikan, 'pencaharian' => $pencaharian));
});

Route::post('/action_pendidikan','KependudukanPendidikan@pendidikan');
Route::post('/action_pencaharian','KependudukanPendidikan@pencaharian');


Route::get('/wna', function () {
    return view('admin/kependudukan/wna');
});
Route::post('/action_wna','KependudukanWna@action');


Route::get('/wni', function () {
    return view('admin/kependudukan/wni');
});
Route::post('/action_wni','KependudukanWni@action');


Route::get('/umur', function () {
    $req = DB::table('tbl_umur')->get();
    return view('admin/kependudukan/umur')->with(array('data' => $req));
});
Route::post('/action_umur','KependudukanUmur@umur');



Route::get('/dashbord',  function () {

return view('admin/dashbord/dashboard');

});

Route::get('login',function(){
return view('admin/login');
});
Route::post('login','Login@login');
route::get('logout',function(){
Auth::logout();
return redirect('login')->with('message','Terima Kasih');
});




});




Route::get('daftar',function(){

DB::table('users')->insert(array(
    'username' => 'AdminRw8',
    'password' => Hash::make('adminkelurahan123#@!'),
    'hak_akses' => 'rw'
    ));

});


Route::get('testing',function(){
//return view('admin/kependudukan/kependudukan');
//query hitung L di tbl jumlah penduduk
    $users = DB::table('tbl_jumlah_penduduk')
                    ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                    ->sum('L');
 $wni = DB::table('tbl_jumlah_umpi')
                    ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                    ->sum('WNI');
$a = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 1)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');

$laki_laki_awal = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
$laki_laki_lahir = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-07'])
                            ->sum('L');
                    
              
                    echo $users;
                    echo $wni;
$jum = collect([$wni,$users])->sum();
echo $jum;

echo "agama :".$a;
echo "laki".$laki_laki_awal;
echo "lahir".$laki_laki_lahir;

  
$dt = new DateTime();
$dt->setTimezone(new DateTimeZone('Asia/jakarta'));
echo $dt->format('Y-m-d H:i:s');
echo "<br>";
echo date('Y-m-d');
echo "<br>";
echo "Bulan";
echo "<br>";
echo date('Y-m-d', strtotime(date('Y-m-d') . '- 1 month'));
});