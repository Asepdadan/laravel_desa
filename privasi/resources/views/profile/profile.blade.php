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
                           <h3 class="text-center">Administrasi pemerintahan</h3>
                           <ol style="list-style-type:lower-alpha">
                             <li>Instansi Pemerintah di Wilayah Kelurahan Cihapit Kecamatan Bandung Wetan 
                              Instansi Pemerintah yang berada di wilayah Kelurahan Cihapit terdiri dari  : </li>
                              <ol start="1">
                                <li>Dinas berjumlah, terdiri dari :</li>
                                  <ol style="list-style-type:lower-alpha">
                                    <li>Pengadilan Negri Kelas II</li>
                                    <li>DISBUDPAR Provinsi Jabar</li>
                                    <li>DISBUDPAR Kota Bandung</li>
                                  </ol>
                                  <li>Instansi BUMN/BUMD  berjumlah  </li>
                                      <ol style="list-style-type:lower-alpha">
                                    <li>Bank Jabar dan Banten (BJB)</li>
                                    <li>Bank Negara Indonesia (BNI)</li>
                                    <li>DISBUDPAR Kota Bandung</li>
                                  </ol>
                              </ol>
                              <li>Pemerintahan Kelurahan</li>

                                    <h5>Data Kondisi Kantor Kelurahan</h5>
                                    <div class="table-responsive">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Uraian</th>
                                            <th>Data</th>
                                            <th>Ket.</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>1</td>
                                            <td>Bangunan Milik PEMKOT Bandung</td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>2</td>
                                            <td>Luas Tanah</td>
                                            <td>735 m2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>3</td>
                                            <td>Luas Bangunan</td>
                                            <td>447 m2</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>4</td>
                                            <td>Tahun Pendirian</td>
                                            <td></td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td rowspan="4">5</td>
                                            <td>Sumber Biaya</td>
                                            <td>APBD</td>
                                            <td></td>
                                          </tr>
                                            <tr>
                                            <td>-Biaya dari Pusat/Propinsi</td>
                                            <td>-</td>
                                            <td></td>
                                            
                                          </tr>
                                            <tr>
                                            <td>-Biaya APBD Kota</td>
                                            <td>APBD  KOTA</td>
                                            <td></td>
                                            
                                          </tr>
                                            <tr>
                                            <td >-Biaya lainnya</td>
                                            <td></td>
                                            <td></td>
                                            
                                          </tr>
                                            <tr>
                                            <td>6</td>
                                            <td>Bertingkat/tidak</td>
                                            <td>TIDAK</td>
                                            <td></td>
                                          </tr>
                                          <tr>
                                            <td>7</td>
                                            <td>Kondisi bangunan kantor</td>
                                            <td>BAIK</td>
                                            <td>RENOVASI th 2013</td>
                                          </tr>

                                        </tbody>
                                      </table>
                                    </div>
                                    <h5>Data Sarana Kerja Kantor Kelurahan</h5>

                                    <div class="table-responsive">
                                      <table class="table table-bordered">
                                        <thead>
                                          <tr>
                                            <th>No</th>
                                            <th>Uraian</th>
                                            <th>Jumlah</th>
                                            <th>Ket</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php  $no = 1  ?>
                                        @foreach($data as $row)
                                          <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->uraian}}</td>
                                            <td>{{ $row->jumlah}}</td>
                                            <td>{{ $row->keterangan}}</td>
                                          </tr>
                                         @endforeach
                                        </tbody>
                                      </table>
                                    </div>

                           </ol>


                             <h3 class="text-center">PROFIL BANGUNAN KANTOR</h3><hr>
                                    <ol style="list-style-type:upper-alpha">
                                    <li>Tampak Depan</li>
                                        <div class="row">
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_depan.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Tampak Depan</b></h5>
                                                  </div>
                                                </div>
                                              </div>

                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_belakang.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Tampak Belakang</b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>         

                                            <div class="row">
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_samping_kiri.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Tampak Samping Kiri</b></h5>
                                                  </div>
                                                </div>
                                              </div>

                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_samping_kanan.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Tampak Samping Kanan</b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>             

                                            <li>RUANG PELAYANAN</li>

                                             <div class="row">
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_pelayanan.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Kasi Pelayanan</b></h5>
                                                  </div>
                                                </div>
                                              </div>

                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_tunggu.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Ruang Tunggu</b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>             

                                            <li>Ruang Kerja</li>
                                            <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_kerja.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Ruang Kerja</b></h5>
                                                  </div>
                                                </div>
                                              </div>

                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_sekertaris.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Ruang Sekertaris</b></h5>
                                                  </div>
                                                </div>
                                              </div>


                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_meja_bhanbinkamtibmas.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Ruang BHANBINKAMTIBMAS</b></h5>
                                                  </div>
                                                </div>
                                              </div>

                                            </div>             



                                            <li>RUANG LEMBAGA KEMASYARAKATAN </li>

                                            <div class="row">
                                              <div class="col-xs-12 col-md-3">
                                                <a href="#" class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lpm1.jpg" alt="...">
                                                </a>
                                              </div>

                                              <div class="col-xs-12 col-md-3">
                                                <a href="#" class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lpm2.jpg" alt="..." >
                                                </a>
                                              </div>

                                              <div class="col-xs-12 col-md-3">
                                                <a href="#" class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lpm3.jpg" alt="...">
                                                </a>
                                              </div>

                                              <div class="col-xs-12 col-md-3">
                                                <a href="#" class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lpm4.jpg" alt="...">
                                                </a>
                                              </div>
                                              Ruang LPM
                                            </div>

                                            <li>RUANG AULA/RUANG PERTEMUAN</li>

                                                <div class="row">
                                                <div class="col-sm-12 col-md-12">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_pertemuan.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b>Ruang Pertemuan</b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              </div>

                                            <li>RUANG LAINNYA (PERPUSTAKAAN DLL)\</li>
                                                <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lainnya1.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lainnya2.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lainnya3.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_ruang_lainnya4.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              </div>

                                               <li>Taman</li>
                                                <div class="row">
                                                <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_taman1.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_taman2.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_taman3.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-sm-6 col-md-6">
                                                <div class="thumbnail">
                                                  <img src="assets/img/kelurahan_taman4.jpg" alt="...">
                                                  <div class="caption">
                                                    <h5 class="text-center"><b></b></h5>
                                                  </div>
                                                </div>
                                              </div>
                                              </div>



                                    </ol>


                           </div>



                         </div> <!-- panel body -->
                       </div>

                       
                </div>


@section('side')
    @parent
       @section('slider')
                <div class="row">
                 
                
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Bapak Lurah</h3>
                    </div>
                    <div class="panel-body">
                                        <!-- Insert to your webpage where you want to display the slider -->
                          <div id="amazingslider-wrapper-1" class="slider" >
                                <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                                    <ul class="amazingslider-slides" style="display:none;">
                                        <li><img src="assets/images/bg05-freshy-water-01.jpg" alt="bg05-freshy-water-01"  title="bg05-freshy-water-01" />
                                        </li>
                                        <li><img src="assets/images/Wallpaper%20pemandangan%20air%20terjun.jpg" alt="Wallpaper pemandangan air terjun"  title="Wallpaper pemandangan air terjun" />
                                        </li>
                                        <li><img src="assets/images/water-wide-hd-wallpaper-for-desktop-background-download-water-images.jpg" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                                        </li>
                                    </ul>
                                    
                                <!-- <div class="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Slideshow">JavaScript Slideshow</a></div> -->
                                </div>
                            </div>
                        <!-- End of body section HTML codes -->



                
                  </div>

                </div>
                   

                </div>
                </div>
                @show   
@endsection

@endsection