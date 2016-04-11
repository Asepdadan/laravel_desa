<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
   
    <title>@yield('title')</title>
    
    {!!  Html::style('assets/css/bootstrap.css') !!}
    {!!  Html::style('assets/css/font-awesome.css') !!}
    {!!  Html::style('assets/css/style.css') !!}
    {!!  Html::style('assets/css/AdminLTE.css') !!}

    {!!  Html::script('assets/js/jquery-1.11.1.js') !!}    

    <!-- Insert to your webpage before the </head> -->
    {!!  Html::script('assets/sliderengine1/amazingslider.js') !!}        
    {!!  Html::style('assets/sliderengine1/amazingslider-1.css') !!}        
    {!!  Html::script('assets/sliderengine1/initslider-1.js') !!}
        <!-- End of head section HTML codes -->

<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel({
          interval: 10000
        });

    });

</script>

</head>
<body>
@section('sidebar')
<header >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <strong>Profile Kelurahan cihapit kecamatan Bandung  Wetan kota bandung</strong>
                </div>
                 <div class="col-xs-12 col-sm-6">
                    &nbsp;&nbsp;
                    <a href="http://www.twitter.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/twitter.png" alt="Twitter" /></a><a href="http://www.facebook.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/facebook.png" alt="Facebook" /></a><a href="http://www.google.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/gplus.png" alt="Google" /></a><a href="http://www.youtube.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/youtube.png" alt="YouTube" /></a><a href="http://www.maps.google.com/" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/googlemaps.png" alt="Google Maps" /></a><a href="http://bandungwetan.com/?feed=rss" target="_blank"><img src="http://bandungwetan.com/wp-content/themes/bantan/cyberchimps/lib/images/social/default/rss.png" alt="RSS" /></a>
                </div>
            </div>
        </div>
</header>
    <!-- HEADER END-->

    <div class="navbar navbar-inverse set-radius-zero" style="background:#2062DD; height:90px;">

    <div class="top">

        <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-1" >
            <div class="navbar-header" style="margin-bottom:30px;">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse" >
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="" >
                    <img src="assets/img/kota_logo.png" style="margin-bottom:50px;" width="90" height="70" />
                </a>
                
                </div>          
            </div>
            <div class="col-xs-12 col-sm-8">
                <h3 style="color:black; font-weight:bold;" class="text-center">KELURAHAN CIHAPIT <br>
                KECAMATAN BANDUNG WETAN<br>
                KOTA BANDUNG</h3>
                  <h5 style="color:black; text-align:center; ">Alamat : jl. sabang No 2A Bandung kode pos 40114 telp (022) 4212984</h5>
            </div>
            <div class="col-xs-12 col-sm-3" style="margin-top:30px;">
            
            <div class="input-group navbar-right" style="margin-top:10px; margin-bottom:10px; margin-left:70px;">
                         
                                          <input type="search" name="pencarian"  class="form-control"  required="required" >
                                          <span class="input-group-btn">
                                            <button class="btn btn-default" type="Submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                          </span>
                                          
                                        </div><!-- /input-group -->


            </div>
            </div>
        </div>


    </div>

    <div class="middle">



    </div>

    <div class="bottom">


    </div>

 

    </div>


    <!-- LOGO HEADER END-->
<section class="menu-section">
    <div class="container">
          <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-left" >
                            <li><a  href="{{ URL::to('') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span></a></li>
                            <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Peta Wilayah <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('/lokasi') }}">Lokasi</a>
                                </li>
                                <li>
                                    <a href="-2-col.html">Kondisi Existing</a>
                                </li>
                                
                            </ul>
                            </li>
                            <li><a href="{{ URL::to('/profile-kelurahan')}}">Profile</a></li>
                            <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Latar Belakang <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="{{ URL::to('/visi-misi')}}">Visi & Misi</a>
                                </li>
                                <li>
                                    <a href="-#">Moto</a>
                                </li>
                                  <li>
                                    <a href="{{URL::to('/sejarah') }}">Sejarah</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/data-statis') }}">Data Statis</a>
                                </li>
                                <li>
                                    <a href="{{ URL::to('/data-dinamis') }}">Data Dinamis</a>
                                </li>

                                
                            </ul>
                            </li>
                                <li class="dropdown" style="bakcground:blue;">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri Foto <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">Kegiata Kelurahan</a>
                                </li>
                                <li>
                                    <a href="#">PIPPK</a>
                                </li>
                                 <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Lembaga  <b class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">RW</a></li>
                                        <li><a href="#">PKK</a></li>
                                        <li><a href="#">LPM</a></li>
                                        <li><a href="#">Karang Taruna</a></li>
                                    </ul>
                                  </li>
                                
                            </ul>
                            </li>
                                <li><a href="">Kependudukan</a></li>
                                <li><a href="table.html">Pengaduan</a></li>
                                <!-- <li><a href="forms.html">Forms</a></li>
                                 <li><a href="login.html">Login Page</a></li>
                                <li><a href="blank.html">Blank Page</a></li> -->
                                <li>
                                
                                </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>     

@show
<section class="content">
<div class="container">
<div class="row">
@yield('content')        


 @section('side')
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-info">
                    <div class="panel-heading">
                      <h3 class="panel-title">Lurah Cihapit</h3>
                      Drs. Iwan Gunawan Herman<br>
                      NIP : 19600405 199003 1 005
                    </div>
                    <div class="panel-body">
                      <img src="assets/img/Pak_lurah.jpg" alt="" class="img-responsive" width="340">
                    </div>
                  </div>

                </div>
                


@show




</div> <!-- end row -->
</div> <!-- containt -->
</div>
</div>
</section>



    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2016 Kelurahan Cihapit Bandung |  : <a href="http://www.designbootstrap.com/" target="_blank">Design Ver 1.1</a>
                </div>

            </div>
        </div>
    </footer>



{!! Html::script('assets/js/bootstrap.js') !!}
</body>
</html>