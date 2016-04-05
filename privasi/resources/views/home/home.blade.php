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
                @foreach($data as $row)
                       <div class="panel panel-default">
                         <div class="panel-body">
                           <div class="page-header" style="margin-top:5px; text-decoration:none;">
                             <h4><a href="">{{$row->judul }}</a><br>
                                <small>Posted by <span class="glyphicon glyphicon-user" aria-hidden="true"></span> {{$row->posted_at}}</small> <small><span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{$row->waktu}}</small>
                             </h4>
                             <p class="text-justify">
                                
                             <img src="{{ url('uploads/image/'.$row->image) }}" class="img-responsive" >
                                
                             </p>
                           </div>
                         </div>
                       </div>
                @endforeach
                         
                <div class="panel panel-default">
                  <div class="panel-body">
                      <nav>
                        <ul class="pager">
                          <li><a href="{!! $data->previousPageUrl() !!}">Previous</a></li>
                          <li><a href="{!! $data->nextPageUrl() !!}">Next</a></li>
                        </ul>

                  </div>
                </div>

                    

                      </nav>
                                             
                </div>

  @section('side')
    @parent

  

@endsection



@endsection