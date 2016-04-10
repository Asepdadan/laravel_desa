<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Page : @yield('title')</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

         @section('css')
        {!! Html::style('assets/porto/assets/vendor/bootstrap/css/bootstrap.min.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/font-awesome/css/font-awesome.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/magnific-popup/magnific-popup.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}        
        {!! Html::style('assets/porto/assets/stylesheets/theme.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/skins/default.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/theme-custom.css') !!} 
        {!! Html::script('assets/porto/assets/vendor/modernizr/modernizr.js') !!} 
        {!! Html::style('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!} 
        
        @show


        <!-- 

    </head>
    <body>
        <section class="body">

            <!-start: header -->
            <header class="header">
                <div class="logo-container">
                    <a href="../" class="logo">
                        <img src="assets/porto/assets/images/logo.png" height="35" alt="Porto Admin" />
                    </a>
                    <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>
            
                <!-- start: search & user box -->
                <div class="header-right">
            
                    <form action="pages-search-results.html" class="search nav-form">
                        <div class="input-group input-search">
                            <input type="text" class="form-control" name="q" id="q" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
            
                    <span class="separator"></span>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name">{{Auth::user()->name}}</span>
                                <span class="role">administrator</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="{{URL::to('/logout') }}"><i class="fa fa-power-off"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end: search & user box -->
            </header>
            <!-- end: header -->

            <div class="inner-wrapper">
                <!-- start: sidebar -->
                <aside id="sidebar-left" class="sidebar-left">
                
                    <div class="sidebar-header">
                        <div class="sidebar-title">
                            Navigation
                        </div>
                        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                        </div>
                    </div>
                
                    <div class="nano">
                        <div class="nano-content">
                            <nav id="menu" class="nav-main" role="navigation">
                                <ul class="nav nav-main">
                                    <li>
                                        <a href="{{ URL::to('dashbord') }}" class="nav-active">
                                            <i class="fa fa-home" aria-hidden="true"></i>
                                            <span>Dashboard</span>
                                        </a>
                                    </li>
                                    <li >
                                        <a href="{{ URL::to('/kependudukan-agama')}}">
                                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                            <span>Input Kependudukan</span>
                                        </a>
                                       
                                    </li>
                                      <li >
                                        <a href="{{ URL::to('/data-penduduk')}}">
                                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                            <span>Data Kependudukan</span>
                                        </a>
                                       
                                    </li>
                                </ul>
                            </nav>
                
                
                            <hr class="separator" />
                
                           
                        </div>
                
                    </div>
                
                </aside>
                <!-- end: sidebar -->


                <section role="main" class="content-body">
                    <header class="page-header">
                        <h2>Kelurahan Cihapit</h2>
                    
                       <!--  <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>FORM</span></li>
                                <li><span>Wizard</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div> -->
                    </header>

                    <!-- start: page -->
                    <div class="row">
                        @yield('content')
                        {{Auth::user()}}
                    </div>                                


                        
                    <!-- end: page -->



                </section>


                

            </div>

            <aside id="sidebar-right" class="sidebar-right">
                <div class="nano">
                    <div class="nano-content">
                        <a href="#" class="mobile-close visible-xs">
                            Collapse <i class="fa fa-chevron-right"></i>
                        </a>
            
                        <div class="sidebar-right-wrapper">
            
                            <div class="sidebar-widget widget-calendar">
                                <h6>Upcoming Tasks</h6>
                                <div data-plugin-datepicker data-plugin-skin="dark" ></div>
            
                                
                            </div>
            
                            <div class="sidebar-widget widget-friends">
                                <h6>Friends</h6>
                               
                            </div>
            
                        </div>
                    </div>
                </div>
            </aside>
        </section>

        @section('js')

        {!! Html::script('assets/porto/assets/vendor/jquery/jquery.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap/js/bootstrap.min.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/nanoscroller/nanoscroller.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/magnific-popup/magnific-popup.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/jquery-placeholder/jquery.placeholder.js') !!} 
        {!! Html::script('assets/porto/assets/javascripts/theme.js') !!} 
        {!! Html::script('assets/porto/assets/javascripts/theme.custom.js') !!} 
        {!! Html::script('assets/porto/assets/javascripts/theme.init.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/jquery-validation/jquery.validate.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-wizard/jquery.bootstrap.wizard.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/pnotify/pnotify.custom.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') !!}
        

        @show



        


    </body>
</html>