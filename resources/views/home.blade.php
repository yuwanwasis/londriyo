<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>LLondriYo</title>
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" type="text/css" href="css/usercss.css">
        
    </head>
    
    <body id="myPage" class="bg-abu" data-spy="scroll" data-target=".navbar" data-offset="60">
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
                                <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -9px;"></a>
                            </div>
                            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                                <ul class="nav navbar-nav">
                                    <li class="active"><a href="#">Home</a></li>
                                    <li class=""><a href="#">Lacak</a></li>
                                    <li class=""><a href="#">Tentang</a></li>
                                    <li class=""><a href="#">Hubungi</a></li>
                                    <li class=""><a href="#">Login</a></li>
                                </ul>
                            </div>
                            
                        </div>
                    </div>
                </nav>

                <div class="container">
                    <div class="row">
                        <div class="banner-info">
                            <div class="banner-text text-center">
                                <h1 class="white">Bersih dan Rapi</h1>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br>tempor incididunt ut labore et dolore magna aliqua.</p>
                                <a href="#Kategori" class="btn btn-appoint">Mau Nyuci ?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="Kategori" class="section-padding tengah">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3>Kategori Cucian</h3>
                        <hr >
                    </div>
                    <a href="#">               
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class=" border-none ">
                                <img src="img/pakaian.png" alt="..." class="img-medium img-circle">
                                <div class="caption">
                                    <h3>Pakaian</h3>
                                </div>
                            </div>
                        </div>
                    </a>    
                    <a href="#"> 
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="border-none" >
                                <img src="img/sepatu.png" alt="..." class="img-medium img-circle" >
                                <div class="caption">
                                    <h3>Sepatu</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"> 
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="border-none" >
                                <img src="img/helm.png" alt="..." class="img-medium img-circle">
                                <div class="caption">
                                    <h3>Helm</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#"> 
                        <div class="col-md-3 col-sm-3 col-xs-6">
                            <div class="border-none">
                                <img src="img/karpet.png" alt="..." class="img-medium img-circle">
                                <div class="caption">
                                    <h3>Karpet</h3>
                                </div>
                            </div>
                        </div>
                    </a>
                    
                </div>
            </div>
        </section>


      <section id="Mitra" class="section-padding " style="background:none" >
          <div class="babyContainer">

          </div>
        </section>
        
        <section class="section-padding" id="sliderMitra">
            @include('sliderMitra')
        </section>

        <section id="footer" class="section-padding">       
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
                        <div class="credits">
                    Lorem
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </footer>
        </section>
    </body>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
</html>
