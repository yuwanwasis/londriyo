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
                    </div>
                </nav>
                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <div class="banner-text text-life">
                                <h2 class="white">Create your partner accont</h2>
                                <br><br>
                                <form method="post" action="">
                                    <div>
                                        <label>Nama</label><input type="text" name="nama" />
                                        <br><label>Email</label><input type="password" name="email"/>
                                        <br><label>Password</label><input type="text" name="password"/>
                                        <br><label>phone number</label><input type="password" name="phone namber"/>
                                        <br><label>ID card</label><input type="text" name="ID card"/>
                                        <br><label>Addres</label><input type="password" name="Addres"/>
                                    </div>
                                </form>
                                <style>
                                    label {
                                        width: 120px;
                                        display: nline-block;
                                        margin-bottom: 20px;
                                    }
                                    div {
                                        margin-bottom: 7px;
                                    }
                                    
                                </style>
                                <div style="border: 1px solid #CCC; margin: 10px 0px; padding: 10px; width: auto; height: auto; background-color: #FBFBEE; text-align: left;">...</div> 
                                <a href="#" class="btn btn-appoint">Create</a>
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
                        <h4 class="white no-padding">Help</h4>
                        </div>
                        <div class="info-sec">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">Privacy</h4>
                        </div>
                        <div class="info-sec">
                        <ul class="quick-info">
                        </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 marb20">
                        <div class="ftr-tle">
                        <h4 class="white no-padding">Tems</h4>
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
