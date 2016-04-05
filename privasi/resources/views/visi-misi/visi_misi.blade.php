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
                             <h3 class="text-center">Visi & Misi</h3><hr>
                             <h4 class="text-center">KELURAHAN CIHAPIT KEC. BANDUNG WETAN KOTA BANDUNG</h4>
                              <hr>
                              <p>
                                <h4 class="text-center">Visi</h4>
                                  <p class="text-justify">Menciptakan optimalisasi layanan kelurahan cihapit untuk mewujudkan ketentraman dan kesejahteraan masyarakat dalam rangka mendukung bandung juara.</p>

                                <h4 class="text-center">Optimalisasi layanan :</h4>
                                  <p class="text-justify">Pemberian layanan oleh perangkat kelurahan dengan mengelola sumber daya yang tersedia untuk memberikan pelayanan yang terbaik dalam mensejahterakan masyarakat.</p>

                                  <h4 class="text-center">Ketentraman :</h4>
                                  <p class="text-justify">Menciptakan suatu kondisi yang dinamis, aman dan tenang sesuai aturan dan norma yang berlaku untuk mencapai kesejahteraan masyarakat.</p>

                                  <h4 class="text-center">Kesejahteraan :</h4>
                                  <p class="text-justify">Tata kehidupan dan penghidupan masyarakat secara material dan spiritual yang sebaik – baiknya bagi diri, keluarga, dan masyarakat dengan menjunjung tinggi hak asasi serta kewajiban manusia.</p>

                                  <hr>
                                  <h4 class="text-center">Misi</h4><hr>
                                  <ol start="1" class="text-justify">
                                    <li>Mewujudkan pelayanan public yang professional ditandai dengan meningkatkan sumber daya aparatur yang handal dalam rangka meningkatkan pemenuhan kebutuhan masyarakat terhadap pelayanan dan meningkatkan kepuasanmasyarakat terhadap layanan yang diberikan.</li>

                                    <li>Meningkatkan partisipasi aktif masyarakat dalam membangun budaya yang toleran dalam meningkatkan kepedulian sosial ditandai dengan menciptakan iklim yang kondusif bagi terwujudnya masyarakat yang memiliki rasa toleransi dan kepekaan sosial yang nyaman bagi masyarakat disekelilingnya serta mampu menjaga dan mematuhi nilai dan norma yang berlaku guna mengupayakan terwujudnya ketentraman, ketertiban dan keteraturan sosial di masyarakat.</li>

                                     <li>Mewujudkan insfrasruktur dan lingkungan yang nyaman ditandai dengan pengembangan iklim yang kondusif bagi terwujudnya masyarakat yang memiliki inisiatif, kreatif, dan produktif dalam memenuhi kebutuhan keluarga, kelompok, maupun kebutuhan bersama di tingkat warga.</li>

                                  </ol>



                              </p>

                           </div>



                         </div><!-- //end panel body -->
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