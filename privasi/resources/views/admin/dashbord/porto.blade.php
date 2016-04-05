<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>Blank Page | Okler Themes | Porto-Admin</title>
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        {!! Html::style('assets/porto/assets/vendor/bootstrap/css/bootstrap.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/font-awesome/css/font-awesome.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/magnific-popup/magnific-popup.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!} 
        
        {!! Html::style('assets/porto/assets/stylesheets/theme.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/skins/default.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/theme-custom.css') !!} 

        {!! Html::script('assets/porto/assets/vendor/modernizr/modernizr.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!} 

    </head>
    <body>
        <section class="body">

            <!-- start: header -->
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
            
                    <ul class="notifications">
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-tasks"></i>
                                <span class="badge">{{  Helpers::Hitung('L')  }}</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu large">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Tasks
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Generating Sales Report</span>
                                                <span class="message pull-right text-dark">60%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Importing Contacts</span>
                                                <span class="message pull-right text-dark">98%</span>
                                            </p>
                                            <div class="progress progress-xs light">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
                                            </div>
                                        </li>
            
                                        <li>
                                            <p class="clearfix mb-xs">
                                                <span class="message pull-left">Uploading something big</span>
                                                <span class="message pull-right text-dark">33%</span>
                                            </p>
                                            <div class="progress progress-xs light mb-xs">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-envelope"></i>
                                <span class="badge">4</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">230</span>
                                    Messages
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Doe</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joe Junior</span>
                                                <span class="message">Lorem ipsum dolor sit.</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <figure class="image">
                                                    <img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
                                                </figure>
                                                <span class="title">Joseph Junior</span>
                                                <span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
                                <i class="fa fa-bell"></i>
                                <span class="badge">3</span>
                            </a>
            
                            <div class="dropdown-menu notification-menu">
                                <div class="notification-title">
                                    <span class="pull-right label label-default">3</span>
                                    Alerts
                                </div>
            
                                <div class="content">
                                    <ul>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-thumbs-down bg-danger"></i>
                                                </div>
                                                <span class="title">Server is Down!</span>
                                                <span class="message">Just now</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-lock bg-warning"></i>
                                                </div>
                                                <span class="title">User Locked</span>
                                                <span class="message">15 minutes ago</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="clearfix">
                                                <div class="image">
                                                    <i class="fa fa-signal bg-success"></i>
                                                </div>
                                                <span class="title">Connection Restaured</span>
                                                <span class="message">10/10/2014</span>
                                            </a>
                                        </li>
                                    </ul>
            
                                    <hr />
            
                                    <div class="text-right">
                                        <a href="#" class="view-more">View All</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
            
                    <span class="separator"></span>
            
                    <div id="userbox" class="userbox">
                        <a href="#" data-toggle="dropdown">
                            <figure class="profile-picture">
                                <img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
                            </figure>
                            <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
                                <span class="name">John Doe Junior</span>
                                <span class="role">administrator</span>
                            </div>
            
                            <i class="fa custom-caret"></i>
                        </a>
            
                        <div class="dropdown-menu">
                            <ul class="list-unstyled">
                                <li class="divider"></li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
                                </li>
                                <li>
                                    <a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
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
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-copy" aria-hidden="true"></i>
                                            <span>Kependudukan</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li >
                                                <a href="">
                                                     RW 01
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 02
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 03
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 04
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 05
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 06
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 07
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pages-search-results.html">
                                                     RW 08
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-parent">
                                        <a>
                                            <i class="fa fa-align-left" aria-hidden="true"></i>
                                            <span>Menu Levels</span>
                                        </a>
                                        <ul class="nav nav-children">
                                            <li>
                                                <a>Posting Berita</a>
                                            </li>
                                            <li class="nav-parent">
                                                <a>Second Level</a>
                                                <ul class="nav nav-children">
                                                    <li class="nav-parent">
                                                        <a>Third Level</a>
                                                        <ul class="nav nav-children">
                                                            <li>
                                                                <a>Third Level Link #1</a>
                                                            </li>
                                                            <li>
                                                                <a>Third Level Link #2</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a>Second Level Link #1</a>
                                                    </li>
                                                    <li>
                                                        <a>Second Level Link #2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
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
                        <h2>Form Wizard</h2>
                    
                        <div class="right-wrapper pull-right">
                            <ol class="breadcrumbs">
                                <li>
                                    <a href="index.html">
                                        <i class="fa fa-home"></i>
                                    </a>
                                </li>
                                <li><span>Forms</span></li>
                                <li><span>Wizard</span></li>
                            </ol>
                    
                            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
                        </div>
                    </header>

                    <!-- start: page -->
                        <div class="row">
                            <div class="col-lg-6">
                     
                            </div>
                            <div class="col-lg-6">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <section class="panel form-wizard" id="w4">
                                    <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="fa fa-caret-down"></a>
                                            <a href="#" class="fa fa-times"></a>
                                        </div>
                                    


                                        <h2 class="panel-title">Form Wizard</h2>
                                    </header>
                                    <div class="panel-body">
                                        <div class="wizard-progress wizard-progress-lg">
                                            <div class="steps-progress">
                                                <div class="progress-indicator"></div>
                                            </div>
                                            <ul class="wizard-steps">
                                                <li class="active">
                                                    <a href="#w4-account" data-toggle="tab"><span>1</span>Account Info</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-profile" data-toggle="tab"><span>2</span>Profile Info</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-billing" data-toggle="tab"><span>3</span>Billing Info</a>
                                                </li>
                                                <li>
                                                    <a href="#w4-confirm" data-toggle="tab"><span>4</span>Confirmation</a>
                                                </li>
                                                 <li>
                                                    <a href="#w4-test" data-toggle="tab"><span>5</span>test</a>
                                                </li>
                                            </ul>
                                        </div>
                        
                                        <form class="form-horizontal" novalidate="novalidate">
                                            <div class="tab-content">
                                                <div id="w4-account" class="tab-pane active">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-username">Username</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="username" id="w4-username" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-password">Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="password" class="form-control" name="password" id="w4-password" required minlength="6">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-profile" class="tab-pane">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-first-name">First Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="first-name" id="w4-first-name" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-last-name">Last Name</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="last-name" id="w4-last-name" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-billing" class="tab-pane">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-cc">Card Number</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="cc-number" id="w4-cc" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="inputSuccess">Expiration</label>
                                                        <div class="col-sm-5">
                                                            <select class="form-control" name="exp-month" required>
                                                                <option>January</option>
                                                                <option>February</option>
                                                                <option>March</option>
                                                                <option>April</option>
                                                                <option>May</option>
                                                                <option>June</option>
                                                                <option>July</option>
                                                                <option>August</option>
                                                                <option>September</option>
                                                                <option>October</option>
                                                                <option>November</option>
                                                                <option>December</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-sm-4">
                                                            <select class="form-control" name="exp-year" required>
                                                                <option>2014</option>
                                                                <option>2015</option>
                                                                <option>2016</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-confirm" class="tab-pane">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-email">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="email" id="w4-email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-3"></div>
                                                        <div class="col-sm-9">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="terms" id="w4-terms" required>
                                                                <label for="w4-terms">I agree to the terms of service</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="w4-test" class="tab-pane">
                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label" for="w4-email">Email</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" name="email" id="w4-email" required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="col-sm-3"></div>
                                                        <div class="col-sm-9">
                                                            <div class="checkbox-custom">
                                                                <input type="checkbox" name="terms" id="w4-terms" required>
                                                                <label for="w4-terms">I agree to the terms of service</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="panel-footer">
                                        <ul class="pager">
                                            <li class="previous disabled">
                                                <a><i class="fa fa-angle-left"></i> Previous</a>
                                            </li>
                                            <li class="finish hidden pull-right">
                                                <a>Finish</a>
                                            </li>
                                            <li class="next">
                                                <a>Next <i class="fa fa-angle-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </section>
                            </div>
                        </div>

                        <div class="row">
                        <div class="col-md-12">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active">
                                        <a href="#popular" data-toggle="tab"><i class="fa fa-star"></i> Pendidikan</a>
                                    </li>
                                    <li>
                                        <a href="#recent" data-toggle="tab">Agama</a>
                                    </li>
                                    <li>
                                        <a href="#usia" data-toggle="tab">Usia</a>
                                    </li>
                                    <li>
                                        <a href="#usia1" data-toggle="tab">Usia</a>
                                    </li>
                                    <li>
                                        <a href="#usia2" data-toggle="tab">Usia</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div id="popular" class="tab-pane active">
                                        <p>Popular</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                        <form class="form-horizontal form-bordered" action="#">
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Default Spinner</label>
                                                <div class="col-md-6">
                                                    <div data-plugin-spinner>
                                                        <div class="input-group input-small">
                                                            <input type="text" class="spinner-input form-control" readonly="readonly">
                                                            <div class="spinner-buttons input-group-btn btn-group-vertical">
                                                                <button type="button" class="btn spinner-up btn-xs btn-default">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </button>
                                                                <button type="button" class="btn spinner-down btn-xs btn-default">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Disabled</label>
                                                <div class="col-md-6">
                                                    <div data-plugin-spinner data-plugin-options='{ "disabled": true }'>
                                                        <div class="input-group input-small">
                                                            <input type="text" class="spinner-input form-control" maxlength="3" >
                                                            <div class="spinner-buttons input-group-btn btn-group-vertical">
                                                                <button type="button" class="btn spinner-up btn-xs">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </button>
                                                                <button type="button" class="btn spinner-down btn-xs">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Horizontal buttons</label>
                                                <div class="col-md-6">
                                                    <div data-plugin-spinner data-plugin-options='{ "value":0, "min": 0, "max": 10 }'>
                                                        <div class="input-group" style="width:150px;">
                                                            <input type="text" class="spinner-input form-control" maxlength="3" >
                                                            <div class="spinner-buttons input-group-btn">
                                                                <button type="button" class="btn btn-default spinner-up">
                                                                    <i class="fa fa-angle-up"></i>
                                                                </button>
                                                                <button type="button" class="btn btn-default spinner-down">
                                                                    <i class="fa fa-angle-down"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <p>
                                                        with <code>max</code> value set to 10
                                                    </p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Date range</label>
                                                <div class="col-md-6">
                                                    <div class="input-daterange input-group" data-plugin-datepicker>
                                                        <span class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </span>
                                                        <input type="text" class="form-control" name="start">
                                                        <span class="input-group-addon">to</span>
                                                        <input type="text" class="form-control" name="end">
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </form>
                                    </div>
                                    <div id="recent" class="tab-pane">
                                        <p>Recent</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    



                                    </div>
                                    <div id="usia" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    </div>
                                    <div id="usia1" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    </div>
                                    <div id="usia2" class="tab-pane">
                                        <p>Usia</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- Vendor -->
        {!! Html::script('assets/porto/assets/vendor/jquery/jquery.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap/js/bootstrap.js') !!} 
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
        {!! Html::script('assets/porto/assets/javascripts/forms/examples.wizard.js') !!} 
        {!! Html::script('assets/porto/assets/javascripts/forms/examples.wizard.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/fuelux/js/spinner.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') !!}
        


    </body>
</html>