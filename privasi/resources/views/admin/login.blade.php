<!doctype html>
<html class="fixed">
    <head>

        <!-- Basic -->
        <meta charset="UTF-8">

        <title>LOGIN</title>
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
      {!! Html::style('assets/porto/assets/vendor/bootstrap/css/bootstrap.min.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/font-awesome/css/font-awesome.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/magnific-popup/magnific-popup.css') !!} 
        {!! Html::style('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!}        
        {!! Html::style('assets/porto/assets/stylesheets/theme.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/skins/default.css') !!} 
        {!! Html::style('assets/porto/assets/stylesheets/theme-custom.css') !!} 
        {!! Html::script('assets/porto/assets/vendor/modernizr/modernizr.js') !!} 
        {!! Html::style('assets/porto/assets/vendor/bootstrap-datepicker/css/datepicker3.css') !!} 
    </head>
    <body>
        <!-- start: page -->
        <section class="body-sign">
            <div class="center-sign">
                <a href="/" class="logo pull-left">
                    <img src="assets/images/logo.png" height="54" alt="Kelurahan Cihapit" />
                </a>

                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Form Login</h2>
                    </div>
                    <div class="panel-body">

                    @if(Session::has('message'))
                        <h4><span class="label label-success">{{ Session::get('message') }}</span></h4>
                    @endif
                      @if($errors->has())
                        <h4><span class="label label-success">{!! $errors->first('username') !!}<br></span></h4>
                        <h4><span class="label label-success">{!! $errors->first('password') !!}<br></span></h4>
                       @endif

                        {!!  Form::open(['url' => 'login']) !!}
                            <div class="form-group mb-lg">
                                <label>Username</label>
                                <div class="input-group input-group-icon">
                                    <input name="username" type="text" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Password</label>
                                    
                                </div>
                                <div class="input-group input-group-icon">
                                    <input name="password" type="password" class="form-control input-lg" />
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    
                                </div>
                                <div class="col-sm-4 text-right">
                                    <button type="submit" class="btn btn-primary hidden-xs">Login</button>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
                                <span>or</span>
                            </span>

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. All Rights Reserved.</p>
            </div>
        </section>
        <!-- end: page -->

        <!-- Vendor -->
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
        {!! Html::script('assets/porto/assets/javascripts/forms/examples.wizard.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/fuelux/js/spinner.js') !!} 
        {!! Html::script('assets/porto/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js') !!}
        

    </body><img src="http://www.ten28.com/fref.jpg">
</html>