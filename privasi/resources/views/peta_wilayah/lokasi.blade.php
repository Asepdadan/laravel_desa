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
                            <h1>LOKASI</h1>
                            <h3><b>
                          KELURAHAN CIHAPIT KECAMATAN BANDUNG WETAN
                            </b></h3>
                            <h4>
                               jl. sabang No 2A Bandung<br>
                                (022) 4212984
                            </h4>
                            <div class="embed-responsive embed-responsive-16by9">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8570898178164!2d107.61858694995604!3d-6.907686669497944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e6355a8061c7%3A0x74be981e6e9822a!2sKelurahan+Cihapit!5e0!3m2!1sid!2sid!4v1459751434509" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                          </div>


                           </div>



                         </div>
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