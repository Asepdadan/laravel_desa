<?php


Route::group(['middleware' => ['web']], function () {

            Route::group(['middleware' => 'SuperAdmin'], function(){
                    Route::get('/posting-berita', 'AdminController@berita');
                    Route::post('/ActionBerita','PostingBerita@posting');
                    Route::get('/kelola-berita', function () {
                        $data = DB::table('tbl_berita')->get();
                        return view('admin/berita/kelola')->with(array('data' => $data));
                    });

                    Route::get('/penduduk','Penduduk@index');
                    Route::post('/ActionJumlahPenduduk', 'Penduduk@action');
                    Route::get('/agama','KependudukanAgama@index');
                    Route::post('/ActionJumlahAgama', 'KependudukanAgama@actionAgama');
                    Route::get('/pendidikan','KependudukanPendidikan@index');
                    Route::post('/action_pendidikan','KependudukanPendidikan@pendidikan');
                    Route::get('/mata-pencaharian','KependudukanMataPencaharian@index');
                    Route::post('/action_pencaharian','KependudukanMataPencaharian@pencaharian');
                    Route::get('/wna',  function() {
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
                    Route::get('/dashbord',  'HomeController@index');

                    });


            Route::group(['middleware' => 'admin'], function(){
                  //
                    Route::get('dashbord-rw',function(){
                        return view('admin/parent');
                    });

         
                    Route::get('/kependudukan-penduduk','Penduduk@indexPenduduk');
                    Route::post('/ActionJumlahPenduduk', 'Penduduk@action');
                    Route::get('/kependudukan-agama','KependudukanAgama@indexAgama');
                    Route::post('/ActionJumlahAgama', 'KependudukanAgama@actionAgama');
                    Route::get('/kependudukan-pendidikan','KependudukanPendidikan@indexPendidikan');
                    Route::post('/action_pendidikan','KependudukanPendidikan@pendidikan');
                    Route::get('/kependudukan-mata-pencaharian','KependudukanMataPencaharian@indexMataPencaharian');
                    Route::post('/action_pencaharian','KependudukanMataPencaharian@pencaharian');
                    Route::get('/kependudukan-wna',  'KependudukanWna@indexWna');                         
                    Route::post('/action_wna','KependudukanWna@action');
                    Route::get('/kependudukan-wni', 'KependudukanWni@indexWni');
                    Route::post('/action_wni','KependudukanWni@action');
                    Route::get('/kependudukan-umur', 'KependudukanUmur@indexUmur');
                    Route::post('/action_umur','KependudukanUmur@umur');



                     Route::get('data-penduduk','DataKependudukan@index');
                    Route::post('action-kependudukan','DataKependudukan@action');

              });

//website guest


            Route::get('carbon',function(){
                $mytime = Carbon\Carbon::now('Asia/Jakarta');
                echo $mytime;
                echo "<br>";
                $month= $mytime->month;
                $day= $mytime->day;
                $tanggal = $mytime->toDateString();
                echo "<br>";
                // echo $mytime->create(2016,$month,10);
                echo "<br>";
                $hasil = $tanggal;
                echo $hasil;
                
                $now = $mytime->isYesterday();
                echo "<br>";
                echo $now;
                echo "<br>";
                echo "benar";
                echo new $mytime('this month'); 
                
                /*echo "<br>";
                echo $jum;*/
                echo "<br>";
                $knownDate = $mytime->create(2016,$month,$day,0);          // create testing date
                $mytime->setTestNow($knownDate);                        // set the mock
                echo new $mytime('last month');                           //

            });




Route::get('/', function () {
    $data = DB::table('tbl_berita')->paginate(2);
    return view('home/home')->with(array('data' => $data));
});

Route::get('/lokasi', function () {
    return view('peta_wilayah/lokasi');
});

Route::get('/profile-kelurahan', function () {
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


Route::get('login',function(){
Auth::logout();
return view('admin/login');
});
Route::post('login','Login@login');
route::get('logout',function(){
Auth::logout();
return redirect('login')->with('message','Terima Kasih');
});




});


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





//admin




Route::get('exports','Export@export');







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

