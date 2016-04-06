<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use DB;
use Excel;

class Export extends Controller
{
    //SELECT sum(`wni`) from tbl_jumlah_umpi where date(waktu) BETWEEN 2016-03-01 and date(now()) 

    public function export(){

        $now = date('Y-m-d');

Excel::create('Laporan Kependudukan Cihapit - '.$now, function($excel) {

    //sheet agama
    $excel->sheet('Agama', function($sheet) {

        // Sheet manipulation
        $sheet->mergeCells('A1:P1');
        $sheet->mergeCells('A2:P2');
        $sheet->cells('A1:P1', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });
        $sheet->cells('A2:P2', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });

        //isian row 1
        $sheet->row(1, array(
             'DAFTAR REKAPITULASI JUMAH PENDUDUK KOTA BANDUNG'
        ));

        $sheet->row(2, array(
             'BERDASARKAN JUMLAH RT, RW DAN MENURUT GOLONGAN AGAMA'
        ));

        //merge cell
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

    //merge
        $sheet->mergeCells('A8:A9');
        $sheet->mergeCells('B8:B9');
        $sheet->mergeCells('C8:D8');
        $sheet->mergeCells('E8:G8');
        $sheet->mergeCells('H8:J8');
        $sheet->mergeCells('K8:P8');

        $sheet->setAutoSize(true);
        $sheet->setSize('C8', 7, 15);
        $sheet->setSize('D8', 7, 15);
        $sheet->setSize('E8', 7, 15);
        $sheet->setSize('F8', 7, 15);
        $sheet->setSize('G8', 7, 15);
        $sheet->setSize('H8', 7, 15);
        $sheet->setSize('I8', 7, 15);
        $sheet->setSize('J80', 7, 15);
       $sheet->cells('A8:P9', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });

        $sheet->cells('A8:A9', function($cells) {
                // manipulate the range of cells
           $cells->setValignment('middle');


                });

        //setting borders cells
        $sheet->setBorder('C8:P14', 'thin');
        $sheet->setBorder('A8:B14', 'thin','thin','thin','thick');
        
        /*header*/
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

        //query 
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

        $P = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
        $jumPenduduk = collect([$L,$P])->sum();

        $islam = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 1)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');

    $kristenProtestan = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 2)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');                            
   
    $kristenKhatolik = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 3)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');                            

      $hindu = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 4)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');                            


    $budha = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 5)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');                            


    $lain_lain = DB::table('tbl_jumlah_agama')
                            ->where('agama_id', 6)
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('jumlah');                            

        $sheet->row(12, array(
            '1', 'Cihapit','46','8',$wni,$wna,$jum,$L,$P,$jumPenduduk,$islam,$kristenProtestan,$kristenKhatolik,$hindu,$budha,$lain_lain
        ));
       
        $sheet->mergeCells('N16:P16');
         $sheet->row(16, array(
            '', 'Catatan',': Coret yang tidak perlu',
            '','','','','','','','','','',
            'Bandung,       Desember  2015'
        ));
         $sheet->row(17, array(
            '', '',
            '   Model Kp. 1/0/BP s/d Model Kp-1/12/BP, sebagai dasar untuk Laporan Kependudukan ',
            '','','','','','','','','','',
            ''
        ));

         $sheet->row(18, array(
            '', '',
            '   Kota Bandung ke tingkat Provinsi Jawa Barat',
            '','','','','','','','','','',
            ''
        ));

         $sheet->row(19, array(
            '', '',
            '   Laporan dari Kelurahan sudah sampai di Kecamatan dan Bagian Pemerintah setiap akhir bulan',
            '','','','','','','','','','',
            ''
        ));

         $sheet->row(20, array(
            '', '',
            '   setiap tanggal 5 bulan berikutnya laporan dari Kecamatan sudah sampai di bagian Pemerintahan',
            '','','','','','','','','','',
            ''
        ));


   }); // end sheet agama

    //start sheet wna
    $excel->sheet('WNA', function($sheet) {

        // Sheet manipulation
         $sheet->mergeCells('A1:c1');
        $sheet->mergeCells('A2:Q2');
        $sheet->mergeCells('A3:Q3');
        $sheet->cells('A1:C1', function($cells) {
        // setting text center
        $cells->setAlignment('LEFT');
        });
        $sheet->cells('A2:Q2', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });

        $sheet->cells('A3:Q3', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });


        //isian row 1
        $sheet->row(1, array(
             'PEMERINTAH KOTA BANDUNG'
        ));

        $sheet->row(2, array(
             'LAPORAN PENDUDUK KOTA BANDUNG'
        ));

          $sheet->row(3, array(
             'BERDASARKAN KELAHIRAN, KEMATIAN, PENDATAN DAN PINDAH'
        ));
          $sheet->row(4, array(
             '','','','','','','','','','','','','','','','',
             'WARGA NEGARA ASING'
        ));

        //merge cell
        $sheet->mergeCells('A5:B5');
        $sheet->mergeCells('A6:B6');
        $sheet->mergeCells('A7:B7');
        $sheet->cells('A5:B7', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('left');
        });

         $sheet->row(5, array(
             'KELURAHAN','',' : CIHAPIT'
        ));
         $sheet->row(6, array(
             'KECAMATAN','', ': BANDUNG WETAN'
        ));

         $sheet->row(7, array(
             'PADA BULAN','',': DESEMBER 2016'
        ));

    //merge
        $sheet->mergeCells('A9:A10');
        $sheet->mergeCells('B9:B10');
        $sheet->mergeCells('C9:E9');
        $sheet->mergeCells('F9:H9');
        $sheet->mergeCells('I9:K9');
        $sheet->mergeCells('L9:N9');
        $sheet->mergeCells('O9:Q9');
        $sheet->mergeCells('R9:T9');

        $sheet->setAutoSize(true);
        $sheet->setSize('A9:T9', 5, 15);
        $sheet->setSize('C10', 7, 15);
        $sheet->setSize('D10', 7, 15);
        $sheet->setSize('E10', 7, 15);
        $sheet->setSize('F10', 7, 15);
        $sheet->setSize('G10', 7, 15);
        $sheet->setSize('H10', 7, 15);
        $sheet->setSize('I10', 7, 15);
        $sheet->setSize('J10', 7, 15);
        $sheet->setSize('K10', 7, 15);
        $sheet->setSize('L10', 7, 15);
        $sheet->setSize('M10', 7, 15);
        $sheet->setSize('N10', 7, 15);
        $sheet->setSize('O10', 7, 15);
        $sheet->setSize('P10', 7, 15);
        $sheet->setSize('Q10', 7, 15);
        $sheet->setSize('R10', 7, 15);
        $sheet->setSize('S10', 7, 15);
        $sheet->setSize('T10', 7, 15);
        $sheet->setSize('A9', 5, 15);
        $sheet->setSize('B9', 15, 15);
       $sheet->cells('A9:T9', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });

        $sheet->cells('A9:A9', function($cells) {
                // manipulate the range of cells
           $cells->setValignment('middle');


                });

        //setting borders cells
        $sheet->setBorder('C9:T15', 'thin');
        $sheet->setBorder('A9:B15', 'thin','thin','thin','thick');
        
        /*header*/
        $sheet->row(9, array(
             'NO', 'KELURAHAN','PENDUDUK AWAL BULAN ','','','LAHIR BULAN INI','','', 'MATI BULAN INI','','','PENDATANG BULAN INI','','','PINDAH BULAN INI','','','PENDUDUK AKHIR BULAN INI','',''
        ));
        $sheet->row(10, array(
            '', '','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML',
        ));

         $sheet->cells('A13:T13', function($cells) {
            // manipulate the range of cells
            $cells->setAlignment('center');
             $cells->setValignment('middle');
            });   

         //query
         $laki_laki_awal = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_awal = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAwal = collect([$laki_laki_awal,$perempuan_awal])->sum();


        $laki_laki_lahir = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

      $perempuan_lahir = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumLahir = collect([$laki_laki_lahir,$perempuan_lahir])->sum();

    $laki_laki_mati = DB::table('tbl_mati')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_mati = DB::table('tbl_mati')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumMati = collect([$laki_laki_mati,$perempuan_mati])->sum();


    $laki_laki_pendatang = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pendatang = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPendatang = collect([$laki_laki_pendatang,$perempuan_pendatang])->sum();


        $laki_laki_pindah = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pindah = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPindah = collect([$laki_laki_pindah,$perempuan_pindah])->sum();


         $laki_laki_akhir = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_akhir = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAkhir = collect([$laki_laki_akhir,$perempuan_akhir])->sum();


        $sheet->row(13, array(
            '', 'CIHAPIT',$laki_laki_awal,$perempuan_awal,$jumPendudukAwal,$laki_laki_lahir,$perempuan_lahir,
            $jumLahir,$laki_laki_mati,$perempuan_mati,$jumMati,$laki_laki_pendatang,$perempuan_pendatang,$jumPendatang,
            $laki_laki_pindah,$perempuan_pindah,$jumPendatang,$laki_laki_akhir,$perempuan_akhir,$jumPendudukAkhir,
        ));        



    }); //end sheet wna

 //start sheet wni
    $excel->sheet('WNI', function($sheet) {

        // Sheet manipulation
         $sheet->mergeCells('A1:c1');
        $sheet->mergeCells('A2:Q2');
        $sheet->mergeCells('A3:Q3');
        $sheet->cells('A1:C1', function($cells) {
        // setting text center
        $cells->setAlignment('LEFT');
        });
        $sheet->cells('A2:Q2', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });

        $sheet->cells('A3:Q3', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });


        //isian row 1
        $sheet->row(1, array(
             'PEMERINTAH KOTA BANDUNG'
        ));

        $sheet->row(2, array(
             'LAPORAN PENDUDUK KOTA BANDUNG'
        ));

          $sheet->row(3, array(
             'BERDASARKAN KELAHIRAN, KEMATIAN, PENDATAN DAN PINDAH'
        ));


          $sheet->row(4, array(
             '','','','','','','','','','','','','','','','',
             'WARGA NEGARA INDONESIA'
        ));

        //merge cell
        $sheet->mergeCells('A5:B5');
        $sheet->mergeCells('A6:B6');
        $sheet->mergeCells('A7:B7');
        $sheet->cells('A5:B7', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('left');
        });

         $sheet->row(5, array(
             'KELURAHAN','',' : CIHAPIT'
        ));
         $sheet->row(6, array(
             'KECAMATAN','', ': BANDUNG WETAN'
        ));

         $sheet->row(7, array(
             'PADA BULAN','',': DESEMBER 2016'
        ));

    //merge
        $sheet->mergeCells('A9:A10');
        $sheet->mergeCells('B9:B10');
        $sheet->mergeCells('C9:E9');
        $sheet->mergeCells('F9:H9');
        $sheet->mergeCells('I9:K9');
        $sheet->mergeCells('L9:N9');
        $sheet->mergeCells('O9:Q9');
        $sheet->mergeCells('R9:T9');

        $sheet->setAutoSize(true);
        $sheet->setSize('A9', 5, 15);
        $sheet->setSize('A9:T9', 5, 25);
        $sheet->setSize('C10', 7, 15);
        $sheet->setSize('D10', 7, 15);
        $sheet->setSize('E10', 7, 15);
        $sheet->setSize('F10', 7, 15);
        $sheet->setSize('G10', 7, 15);
        $sheet->setSize('H10', 7, 15);
        $sheet->setSize('I10', 7, 15);
        $sheet->setSize('J10', 7, 15);
        $sheet->setSize('K10', 7, 15);
        $sheet->setSize('L10', 7, 15);
        $sheet->setSize('M10', 7, 15);
        $sheet->setSize('N10', 7, 15);
        $sheet->setSize('O10', 7, 15);
        $sheet->setSize('P10', 7, 15);
        $sheet->setSize('Q10', 7, 15);
        $sheet->setSize('R10', 7, 15);
        $sheet->setSize('S10', 7, 15);
        $sheet->setSize('T10', 7, 15);



        $sheet->setSize('A9', 5, 15);
        $sheet->setSize('B9', 15, 15);
       $sheet->cells('A9:T9', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });

        $sheet->cells('A9:A9', function($cells) {
                // manipulate the range of cells
           $cells->setValignment('middle');


                });

        //setting borders cells
        $sheet->setBorder('C9:T15', 'thin');
        $sheet->setBorder('A9:B15', 'thin','thin','thin','thick');
        
        /*header*/
        $sheet->row(9, array(
             'NO', 'KELURAHAN','PENDUDUK AWAL BULAN ','','','LAHIR BULAN INI','','', 'MATI BULAN INI','','','PENDATANG BULAN INI','','','PINDAH BULAN INI','','','PENDUDUK AKHIR BULAN INI','',''
        ));
        $sheet->row(10, array(
            '', '','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML',
        ));

         $sheet->cells('A13:T13', function($cells) {
            // manipulate the range of cells
            $cells->setAlignment('center');
             $cells->setValignment('middle');
            });   

$bulanSebelumnya =  date('Y-m-d', strtotime(date('Y-m-d') . '- 1 month'));

         //query
         $laki_laki_awal_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_awal_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAwal_I = collect([$laki_laki_awal_I,$perempuan_awal_I])->sum();


        $laki_laki_lahir_I = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

      $perempuan_lahir_I = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumLahir_I = collect([$laki_laki_lahir_I,$perempuan_lahir_I])->sum();

    $laki_laki_mati_I = DB::table('tbl_mati')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_mati_I = DB::table('tbl_mati')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumMati_I = collect([$laki_laki_mati_I,$perempuan_mati_I])->sum();


    $laki_laki_pendatang_I = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pendatang_I = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPendatang_I = collect([$laki_laki_pendatang_I,$perempuan_pendatang_I])->sum();


        $laki_laki_pindah_I = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pindah_I = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPindah_I = collect([$laki_laki_pindah_I,$perempuan_pindah_I])->sum();


         $laki_laki_akhir_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_akhir_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAkhir_I = collect([$laki_laki_akhir_I,$perempuan_akhir_I])->sum();


        $sheet->row(13, array(
            '', 'CIHAPIT',$laki_laki_awal_I,$perempuan_awal_I,$jumPendudukAwal_I,$laki_laki_lahir_I,$perempuan_lahir_I,
            $jumLahir_I,$laki_laki_mati_I,$perempuan_mati_I,$jumMati_I,$laki_laki_pendatang_I,$perempuan_pendatang_I,$jumPendatang_I,
            $laki_laki_pindah_I,$perempuan_pindah_I,$jumPendatang_I,$laki_laki_akhir_I,$perempuan_akhir_I,$jumPendudukAkhir_I,
        ));        

}); //end wni        


//start wna & wni
    $excel->sheet('WNA & WNI', function($sheet) {

        // Sheet manipulation
         $sheet->mergeCells('A1:c1');
        $sheet->mergeCells('A2:Q2');
        $sheet->mergeCells('A3:Q3');
        $sheet->cells('A1:C1', function($cells) {
        // setting text center
        $cells->setAlignment('LEFT');
        });
        $sheet->cells('A2:Q2', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });

        $sheet->cells('A3:Q3', function($cells) {
        // setting text center
        $cells->setAlignment('center');
        });


        //isian row 1
        $sheet->row(1, array(
             'PEMERINTAH KOTA BANDUNG'
        ));

        $sheet->row(2, array(
             'LAPORAN PENDUDUK KOTA BANDUNG'
        ));

          $sheet->row(3, array(
             'BERDASARKAN KELAHIRAN, KEMATIAN, PENDATAN DAN PINDAH'
        ));


          $sheet->row(4, array(
             '','','','','','','','','','','','','','','','',
             'GABUNGAN WNA & WNI'
        ));

        //merge cell
        $sheet->mergeCells('A5:B5');
        $sheet->mergeCells('A6:B6');
        $sheet->mergeCells('A7:B7');
        $sheet->cells('A5:B7', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('left');
        });

         $sheet->row(5, array(
             'KELURAHAN','',' : CIHAPIT'
        ));
         $sheet->row(6, array(
             'KECAMATAN','', ': BANDUNG WETAN'
        ));

         $sheet->row(7, array(
             'PADA BULAN','',': DESEMBER 2016'
        ));

    //merge
        $sheet->mergeCells('A9:A10');
        $sheet->mergeCells('B9:B10');
        $sheet->mergeCells('C9:E9');
        $sheet->mergeCells('F9:H9');
        $sheet->mergeCells('I9:K9');
        $sheet->mergeCells('L9:N9');
        $sheet->mergeCells('O9:Q9');
        $sheet->mergeCells('R9:T9');
        $sheet->mergeCells('A16:B16');

        $sheet->setAutoSize(true);
        $sheet->setSize('A9', 5, 15);
        $sheet->setSize('A9:T9', 5, 25);
        $sheet->setSize('C10', 7, 15);
        $sheet->setSize('D10', 7, 15);
        $sheet->setSize('E10', 7, 15);
        $sheet->setSize('F10', 7, 15);
        $sheet->setSize('G10', 7, 15);
        $sheet->setSize('H10', 7, 15);
        $sheet->setSize('I10', 7, 15);
        $sheet->setSize('J10', 7, 15);
        $sheet->setSize('K10', 7, 15);
        $sheet->setSize('L10', 7, 15);
        $sheet->setSize('M10', 7, 15);
        $sheet->setSize('N10', 7, 15);
        $sheet->setSize('O10', 7, 15);
        $sheet->setSize('P10', 7, 15);
        $sheet->setSize('Q10', 7, 15);
        $sheet->setSize('R10', 7, 15);
        $sheet->setSize('S10', 7, 15);
        $sheet->setSize('T10', 7, 15);



        $sheet->setSize('A9', 5, 15);
        $sheet->setSize('B9', 15, 15);
       $sheet->cells('A9:T9', function($cells) {
        // manipulate the range of cells
        $cells->setAlignment('center');
        });

        $sheet->cells('A9:A9', function($cells) {
                // manipulate the range of cells
           $cells->setValignment('middle');


                });

        //setting borders cells
        $sheet->setBorder('C9:T16', 'thin');
        $sheet->setBorder('A9:B16', 'thin','thin','thin','thick');
        
        /*header*/
        $sheet->row(9, array(
             'NO', 'KELURAHAN CIHAPIT','PENDUDUK AWAL BULAN ','','','LAHIR BULAN INI','','', 'MATI BULAN INI','','','PENDATANG BULAN INI','','','PINDAH BULAN INI','','','PENDUDUK AKHIR BULAN INI','',''
        ));
        $sheet->row(10, array(
            '', '','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML','L','P','JML',
        ));

         $sheet->cells('A16:T16', function($cells) {
            // manipulate the range of cells
            $cells->setAlignment('center');
             $cells->setValignment('middle');
            });   

$bulanSebelumnya =  date('Y-m-d', strtotime(date('Y-m-d') . '- 1 month'));

         //query
         $laki_laki_awal_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_awal_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAwal_I = collect([$laki_laki_awal_I,$perempuan_awal_I])->sum();


        $laki_laki_lahir_I = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

      $perempuan_lahir_I = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumLahir_I = collect([$laki_laki_lahir_I,$perempuan_lahir_I])->sum();

    $laki_laki_mati_I = DB::table('tbl_mati')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_mati_I = DB::table('tbl_mati')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumMati_I = collect([$laki_laki_mati_I,$perempuan_mati_I])->sum();


    $laki_laki_pendatang_I = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pendatang_I = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPendatang_I = collect([$laki_laki_pendatang_I,$perempuan_pendatang_I])->sum();


        $laki_laki_pindah_I = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pindah_I = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNI')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPindah_I = collect([$laki_laki_pindah_I,$perempuan_pindah_I])->sum();


         $laki_laki_akhir_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_akhir_I = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAkhir_I = collect([$laki_laki_akhir_I,$perempuan_akhir_I])->sum();


        $sheet->row(12, array(
            '', 'WNI',$laki_laki_awal_I,$perempuan_awal_I,$jumPendudukAwal_I,$laki_laki_lahir_I,$perempuan_lahir_I,
            $jumLahir_I,$laki_laki_mati_I,$perempuan_mati_I,$jumMati_I,$laki_laki_pendatang_I,$perempuan_pendatang_I,$jumPendatang_I,
            $laki_laki_pindah_I,$perempuan_pindah_I,$jumPendatang_I,$laki_laki_akhir_I,$perempuan_akhir_I,$jumPendudukAkhir_I,
        ));        


                 //query
         $laki_laki_awal = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_awal = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAwal = collect([$laki_laki_awal,$perempuan_awal])->sum();


        $laki_laki_lahir = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

      $perempuan_lahir = DB::table('tbl_lahir')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumLahir = collect([$laki_laki_lahir,$perempuan_lahir])->sum();

    $laki_laki_mati = DB::table('tbl_mati')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_mati = DB::table('tbl_mati')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumMati = collect([$laki_laki_mati,$perempuan_mati])->sum();


    $laki_laki_pendatang = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pendatang = DB::table('tbl_pendatang')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPendatang = collect([$laki_laki_pendatang,$perempuan_pendatang])->sum();


        $laki_laki_pindah = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');

    $perempuan_pindah = DB::table('tbl_pindah')
                            ->where('penduduk', 'WNA')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');
    $jumPindah = collect([$laki_laki_pindah,$perempuan_pindah])->sum();


         $laki_laki_akhir = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('L');
        $perempuan_akhir = DB::table('tbl_jumlah_penduduk')
                            ->whereBetween('waktu', ['2016-03-01', '2016-04-06'])
                            ->sum('P');

        $jumPendudukAkhir = collect([$laki_laki_akhir,$perempuan_akhir])->sum();





          $sheet->row(14, array(
            '', 'WNA',$laki_laki_awal,$perempuan_awal,$jumPendudukAwal,$laki_laki_lahir,$perempuan_lahir,
            $jumLahir,$laki_laki_mati,$perempuan_mati,$jumMati,$laki_laki_pendatang,$perempuan_pendatang,$jumPendatang,
            $laki_laki_pindah,$perempuan_pindah,$jumPendatang,$laki_laki_akhir,$perempuan_akhir,$jumPendudukAkhir,
        ));        



$totalPendudukLakiWni = collect([$laki_laki_awal_I,$laki_laki_awal])->sum();
    
        
        $sheet->row(16,array(
            'TOTAL','',$totalPendudukLakiWni

            ));

}); //wni        






})->export('xlsx');

    }

}
