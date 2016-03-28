@extends('layout.app')

@section('title', 'Profile Kelurahan Cihapit')

@section('sidebar')
    @parent
        
@endsection

@section('content')
 <div class="ccol-xs-12 col-md-8">
                       <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="page-header" style="margin-top:5px; text-decoration:none;">
                             <h3 class="text-center">Pemerintahan Kelurahan</h3>
                                <h5><b>Kondisi Aparatur</b></h5>
                                <p>Jumlah pegawai yang ada di Kelurahan Cihapit adalah sejumlah 7 Orang dengan rincian sebagai berikut :</p>
                                <ol start="1">
                                    <li>Pegawai Negeri Sipil (PNS) di Kelurahan sebanyak  7 orang</li>
                                    <li>Calon PNS  ada 1</li>
                                    <li>Pekerja harian lepas  ( PHL )  20  Orang</li>
                                    <li>Linmas Jaga Lembur 13 Orang</li>
                                </ol>

                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead > 
                                            <tr>
                                                <th>No</th>
                                                <th>NAMA ,NIP TMPT <br> TGL LAHIR</th>
                                                <th>Tempat/Tanggal Lahir</th>
                                                <th>PANGKAT GOLONGAN</th>
                                                <th>JABATAN (TMT)</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Drs. IWAN GUNAWAN H, NIP. 19600405 199003 1005</td>
                                                <td>Bandung, 05 – 04 – 1960</td>
                                                <td>III/d</td>
                                                <td>Lurah</td>
                                            </tr>
                                             <tr>
                                                <td>2</td>
                                                <td>ENDANG KURNIA, SE. NIP. 19610703 200604 1 004</td>
                                                <td>Rks.Bitung,   03 – 07 -  1961</td>
                                                <td>III/c</td>
                                                <td>Sekretaris Lurah</td>
                                            </tr>
                                             <tr>
                                                <td>3</td>
                                                <td>HESTTY  SARININGSIH, S.Sos NIP. 19681122 199501 2 001</td>
                                                <td>Bandung , 22 – 11 – 1968</td>
                                                <td>III/d</td>
                                                <td>Kasi Pemerintahan</td>
                                            </tr>
                                             <tr>
                                                <td>4</td>
                                                <td>TATI HARYATI,  SE. NIP. 19640412 199803 2 005</td>
                                                <td>Bandung,  12 – 04 – 1964</td>
                                                <td>III/d</td>
                                                <td>Kasi Ekbang  &  L H</td>
                                            </tr>
                                             <tr>
                                                <td>5</td>
                                                <td>SARIROTUN,  S.IP NIP.  19600115 198908 2 001</td>
                                                <td>Indramayu,  15 – 01 – 1960</td>
                                                <td>III/d</td>
                                                <td>Kasi  Pelayanan</td>
                                            </tr>
                                             <tr>
                                                <td>6</td>
                                                <td>R. IMAN SOEPARMAN  MP NIP.19590112 198001 1 001</td>
                                                <td>Bogor, 12 – 01 - 1959 </td>
                                                <td>II/d</td>
                                                <td>Pelaksana</td>
                                            </tr>
                                             <tr>
                                                <td>7</td>
                                                <td>APRIYANTO AJI CATMOKO. NIP. 19830406 201503 1 002</td>
                                                <td>Magelang, 06-04-1983</td>
                                                <td>III/a</td>
                                                <td>Pelaksana</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>


                                <h5 class="text-center"><b>Komposisi Karyawan Berdasarkan  Eselonering</b></h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>ESELONERING</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>JUMLAH</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Eselon    IV. A</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Eselon    IV. B</td>
                                                <td>1</td>
                                                <td>4</td>
                                                <td>5</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <h5 class="text-center"><b>Komposisi Karyawan Berdasarkan Pangkat/Golongan</b></h5>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th>NO</th>
                                                <th>Pangkat / Gol</th>
                                                <th>L</th>
                                                <th>P</th>
                                                <th>JUMLAH</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Iv/d</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Iv/c</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Iv/b</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Iv/a</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>III/d</td>
                                                <td>1</td>
                                                <td>3</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>III/c</td>
                                                <td>1</td>
                                                <td>1</td>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>III/b</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>III/a</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>II/d</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>II/c</td>
                                                <td>1</td>
                                                <td>-</td>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>II/b</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>II/a</td>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>

                                <h5>Kependudukan</h5>
                                <p>Kelurahan Cihapit memiliki jumlah penduduk   6.272  jiwa pada Desember tahun 2015 teriri dari
                                  3012 jiwa laki-  laki  dan 3260  jiwa perempuan. Jumlah Kepala Keluarga  di Kelurahan Cihapit saat ini 
                                  mencapai sekitar  1.040   KK. Berdasarkan data Kependudukan Kelurahan Cihapit  pada tahun 2015 
                                   yang dilihat dari segi kepadatan Penduduk, pertumbuhan penduduk Intensitas populasinya akan terus
                                    bertambah dari waktu ke waktu.</p>
                                    <ol style="list-style-type:lower-alpha">
                                        <li>Usia</li>
                                        <h5>Jumlah penduduk berdasarkan Struktur Umur : </h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr style="align:center;">
                                                        <th rowspan="2">No</th>
                                                        <th rowspan="2">Umur</th>
                                                        <th colspan="6">Jumlah</th>
                                                    </tr>
                                                    <tr>
                                                       <th >L</th>
                                                        <th >P</th>
                                                        <th >Jumlah</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                        <tr>
                                                            <td>1</td>
                                                            <td>0 - 5</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td>2</td>
                                                            <td>6 - 9</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>3</td>
                                                            <td>10 - 15</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>4</td>
                                                            <td>16 - 19</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>5</td>
                                                            <td>20 - 24</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>6</td>
                                                            <td>25 - 29</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>7</td>
                                                            <td>30 - 34</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>8</td>
                                                            <td>35 - 39</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>9</td>
                                                            <td>40 - 44</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>10</td>
                                                            <td>45 - 49</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>11</td>
                                                            <td>50 -54</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>12</td>
                                                            <td>55 - 59</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>13</td>
                                                            <td>60 - 64</td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>  
                                                        <tr>
                                                            <td>14</td>
                                                            <td><b>65 - Keatas</b></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td>Jumlah</td>
                                                            <td>3012</td>
                                                            <td>3260</td>
                                                            <td>6272</td>
                                                        </tr>                                                                                               
                                                </tbody>
                                            </table>
                                        </div>

                                    </ol>


                           </div>



                         </div>
                       </div>

                       
                </div>


 @section('side')
    @parent
        
@endsection

@endsection