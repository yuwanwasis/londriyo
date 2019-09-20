<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LondriYo/Login</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
        <link rel="stylesheet" type="text/css" href="<?php  echo url('/'); ?>/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="<?php  echo url('/'); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="<?php  echo url('/'); ?>/css/style.css">        
    </head>    
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <section id="banner" class="banner">
            <div class="bg-color">
                <nav class="navbar navbar-default navbar-fixed-top" >
                    <div class="container">
                        <div class="col-md-12">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                          </button>
                                <a class="navbar-brand" href="#"><img src="<?php  echo url('/'); ?>/img/logo.png" class="img-responsive" style="width: 140px; margin-top: -9px;"></a>
                            </div>
                            <div class="collapse navbar-collapse navbar-left" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Login</a></li>
                                    <li class=""><a href="#">About Us</a></li>
                                    <li class=""><a href="#">Blog</a></li>
                                    <li class=""><a href="#">Contact Us</a></li>
                                 
                                </ul>
                            </div>
                              <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <div class="banner-text text-life">
                                <h1 class="white">It's time to londriYo!</h1>
                                <p><h3 class= "white">without having to get more discount</h3></p><br/><br/>
                                <form method="post" action="">
                                    <div>
                                        <label>Email</label><input type="text" name="email" value="<?=@$_POST['email']?>"/>
                                        <br><label>Password</label><input type="password" name"password"/>
                                    </div>
                                </form>
                                <style>
                                    label {
                                        width: 100px;
                                        display: inline-block;
                                    }
                                    div {
                                        margin-bottom: 5px;
                                    }
                                </style>
                                <a href="#" class="btn btn-appoint">login</a>
                                <a href="#" class= "btn btn-appoint">Register now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Kategori" class="section-padding">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                <h2 class="ser-title">Promo Minggu Ini</h2>
                <hr class="botm-line">
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/pakaian.jpg" alt="..." class="team-img">
                    <div class="caption">
                    <h3>Pakaian</h3>
                    </div>
                </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="img/pakaian.jpg" alt="..." class="team-img">
                    <div class="caption">
                    <h3>Helem</h3>
                    </div>
                </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="<?php  echo url('/'); ?>img/pakaian.jpg" alt="..." class="team-img">
                    <div class="caption">
                    <h3>sepatu</h3>
                    </div>
                </div>
                </div>
                  <div class="col-md-3 col-sm-3 col-xs-6">
                <div class="thumbnail">
                    <img src="<?php  echo url('/'); ?>img/pakaian.jpg" alt="..." class="team-img">
                    <div class="caption">
                    <h3>selimut</h3>
                    </div>
                </div>
                </div>
               
            </div>
            </div>
        </section>
      
                <section id="Kategori" class="section-padding">       
            <footer id="footer">
                <div class="top-footer">
                <div class="container">
                    <div class="row">
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">Services</h4>
                        </div>
                        <div class="info-sec">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">About</h4>
                        </div>
                        <div class="info-sec">
                        <ul class="quick-info">
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">About</h4>
                        </div>
                        <div class="info-sec">
                        <ul class="quick-info">
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">Follow us</h4>
                        </div>
                        <div class="info-sec">
                        <ul class="social-icon">
                            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
                            <li class="bgred"><i class="fa fa-google-plus"></i></li>
                            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
                            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="footer-line">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12 text-center">
                        Lorem
                    </div>
                    </div>
                </div>
                </div>
            </footer>
        </section>
    </body>

  <script src="<?php  echo url('/'); ?>/js/jquery.min.js"></script>
  <script src="<?php  echo url('/'); ?>/js/jquery.easing.min.js"></script>
  <script src="<?php  echo url('/'); ?>/js/bootstrap.min.js"></script>
  <script src="<?php  echo url('/'); ?>/js/custom.js"></script>
  <script src="<?php  echo url('/'); ?>/contactform/contactform.js"></script>
</html>
