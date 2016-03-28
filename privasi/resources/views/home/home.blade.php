@extends('layout.app')

@section('title', 'Halaman Awal')

@section('sidebar')
    @parent
        
@endsection



@section('content')
 <!-- Insert to your webpage where you want to display the slider -->
      <div id="amazingslider-wrapper-1" class="slider" >
            <div id="amazingslider-1" style="display:block;position:relative;margin:0 auto;">
                <ul class="amazingslider-slides" style="display:none;">
                    <li><img src="assets/images/bg05-freshy-water-01.jpg" />
                    </li>
                    <li><img src="assets/images/Wallpaper%20pemandangan%20air%20terjun.jpg" alt="Wallpaper pemandangan air terjun" />
                    </li>
                    <li><img src="assets/images/water-wide-hd-wallpaper-for-desktop-background-download-water-images.jpg" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                    </li>
                    <li><img src="assets/images/background slid + AWLR & data loger-tn.png" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                    </li>
                    <li><img src="assets/images/background slid + detector.png" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                    </li>
                    <li><img src="assets/images/background slid + AWLR & data loger-tn.png" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images"  title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" />
                    </li>
                </ul>
                <ul class="amazingslider-thumbnails" style="display:none;">
                    <li><img src="images/bg05-freshy-water-01-tn.jpg" alt="bg05-freshy-water-01" title="bg05-freshy-water-01" /></li>
                    <li><img src="images/Wallpaper%20pemandangan%20air%20terjun-tn.jpg" alt="Wallpaper pemandangan air terjun" title="Wallpaper pemandangan air terjun" /></li>
                    <li><img src="images/water-wide-hd-wallpaper-for-desktop-background-download-water-images-tn.jpg" alt="water-wide-hd-wallpaper-for-desktop-background-download-water-images" title="water-wide-hd-wallpaper-for-desktop-background-download-water-images" /></li>
                </ul>
            <!-- <div class="amazingslider-engine"><a href="http://amazingslider.com" title="JavaScript Slideshow">JavaScript Slideshow</a></div> -->
            </div>
        </div>
    <!-- End of body section HTML codes -->



      <div class="container">
                <div class="row">
                  <div class="col-xs-12 col-md-4">
                        <a href="{{ URL::to('/data-statis') }}"><div class="panel panel-info panel-head">
                        <div class="panel-heading heading" style="background:blue; border-radius : 20px 20px 0px 0px; color: white;">
                              <h3 class="panel-title text-center font">Data Statis</h3>
                          </div>
                          <div class="panel-body panel-content" >
                              <img src="assets/img/bandung.jpg" class="img-responsive img" >

                          </div>
                          <div class="panel-footer panel-bawah">
                          Kelurahan CIHAPIT Kecamatan BANDUNG WETAN merupakan salah satu bagian wilayah pemerintah Kota Bandung dengan memiliki luas lahan sebesar 123 Ha
                      </div>
                      </div></a>

                  </div>
                  <div class="col-xs-12 col-md-4">
                      <a href="{{ URL::to('/data-dinamis') }}"><div class="panel panel-info panel-head">
                          <div class="panel-heading" style="background:blue; border-radius : 15px 15px 0px 0px; color: white; " >
                              <h3 class="panel-title text-center font">Data Dinamis</h3>
                          </div>
                          <div class="panel-body panel-content">
                              <img src="assets/img/bandung.jpg" class="img-responsive img" >
                          </div>
                          <div class="panel-footer panel-bawah">
                          Kelurahan Cihapit memiliki jumlah penduduk 6.272 jiwa pada Desember tahun 2015 terdiri dari 3012 jiwa laki- laki dan 3260 jiwa perempuan. 
                      </div>
                      </div></a>

                  </div>
                  <div class="col-xs-12 col-md-4" >
                      <div class="panel panel-info panel-head" >
                          <div class="panel-heading font" style="background:blue; border-radius : 20px 20px 0px 0px; color: white;">
                              <h3 class="panel-title text-center font" >Potensi</h3>
                          </div>
                          <div class="panel-body panel-content" >
                              <img src="assets/img/bandung.jpg" class="img-responsive img" >
                          </div>
                          <div class="panel-footer panel-bawah">
                          Panel footer
                      </div>
                      </div>

                  </div>


                </div> <!-- end row -->
            
                <div class="row">
                <div class="ccol-xs-12 col-md-8">
                       <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="page-header" style="margin-top:5px; text-decoration:none;">
                             <h4><a href="">judul berita</a><br>
                                <small>Posted by </small><small>22 April, 2016</small>
                             </h4>
                             <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                             </p>
                           </div>
                         </div>
                       </div>

                         <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="page-header" style="margin-top:5px; text-decoration:none;">
                             <h4><a href="">judul berita</a><br>
                                <small>Posted by </small><small>22 April, 2016</small>
                             </h4>
                             <p class="text-justify">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                             </p>
                           </div>
                         </div>
                       </div>


                </div>

  @section('side')
    @parent

@endsection



@endsection