<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HOTEL GRAND ALIA CIKINI</title>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet"> 
  <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lightbox.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">
  <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/circle.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/full-slider.css') }}" rel="stylesheet">


  <!--[if lt IE 9]>
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
</head><!--/head-->

<body>

  <!--.preloader-->
  <div class="preloader"> <i class="fa fa-circle-o-notch fa-spin"></i></div>
  <!--/.preloader-->
    <!-- Full Page Image Background Carousel Header -->
<header id="home">

      <!-- Controls -->
    <div class="main-nav navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/id/">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap2.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="/id/">Beranda</a></li>
            <li ><a href="/id/gallery">Galeri</a></li> 
            <li ><a href="/id/suites" >Kamar & Suite</a></li>                     
            <li ><a href="/id/meetings" style="color:#dbb13b;">Ruang Rapat</a></li>
            <li><a href="/id/wedding">Pernikahan</a></li>
            <li><a href="/id/room-reservation">reservasi</a></li>  
            <li ><a href="/id/feedback">Saran</a></li>

            <li><a href="/en/meetings"><img class="img-responsive" src="{{ URL::asset('images/english.png') }}" height="25" width="25" alt="logo"></a></li>     
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="meetingroom" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1 > <b>R</b>UANG RAPAT </h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->

  <div class="container" style="padding-bottom: 10px ;margin-top:25px; margin-bottom: 25px;">
    <div class="row">
      <div class="col-sm-12">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <div class="fill" style="background-image: url({{ URL::asset('images/meeting/meeting1.jpg') }});"></div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image: url({{ URL::asset('images/meeting/meeting2.jpg') }});"></div>
                </div>
                <div class="item">
                    <div class="fill" style="background-image: url({{ URL::asset('images/meeting/meeting3.jpg') }});"></div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel" data-slide="prev"><b>&lsaquo;</b></a>
            <a class="carousel-control right" href="#carousel" data-slide="next"><b>&rsaquo;</b></a>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-6">
      <h2 class="black h24 text-center">RAPAT YANG ISTIMEWA MELAHIRKAN INSPIRASI & HASIL YANG ISTIMEWA</h2>
      <p>Terletak di tengah Jakarta, Hotel Gren Alia Cikini adalah tempat yang sempurna untuk mengadakan rapat. Dengan ruang rapat yang istimewa, menu yang nikmat dan layanan yang terpadu, kami menjamin rapat yang spesial untuk semuanya. Yang Anda dapatkan adalah: Fasilitas dan layanan yang istimewa, lokasi yang ideal di tengah Jakarta, variasi hidangan menarik, coffee break dan minuman, kapasitas mencapai 300 pax, dan internet kecepatan tinggi.</p>
      
        <div class="panel-group" id="accordion">
            <div class="panel">
                <h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b class="biru">Fasilitas Ruang Rapat</b></a>
                </h4>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p style="font-size:16px;">Sound system & microphone <i class="fa fa-circle-thin biru"></i> Projection Screen <i class="fa fa-circle-thin biru"></i> White Board <i class="fa fa-circle-thin biru"></i> Flip Chart <i class="fa fa-circle-thin biru"></i> Notepad <i class="fa fa-circle-thin biru"></i> Free Wi-Fi </p>
                    </div>
                </div>
            </div>
        </div>
      <b>Paket ruang rapat tersedia. </b>

      </div>

      <div class="col-sm-6">
        <h2 class="black h24 text-center">KETERANGAN</h2>
          <center><span class="bordered-icon"><i class="fa fa-circle-thin"></i></span></center>


        <figure class="thumbnail" style="margin-bottom:10px;font-size: 20px;">

          <figcaption class="caption">
            <b>KETAPANG KENCANA  </b><i class="fa fa-user biru desc2"></i>270-580 Orang <i class="fa fa-expand biru desc2"></i>340.75 M²
          </figcaption>

          <figcaption class="caption">
            <b>ADELIA</b><i class="fa fa-user biru desc2"></i>90-150 Orang <i class="fa fa-expand biru desc2"></i>142.5 M²
          </figcaption>

          <figcaption class="caption">
            <b>SEPATU DEA  </b><i class="fa fa-user biru desc2"></i>50-120 Orang <i class="fa fa-expand biru desc2"></i>115.5 M² 
          </figcaption>

          <figcaption class="caption">
            <b>TRAMBESI  </b><i class="fa fa-user biru desc2"></i>30-80 Orang <i class="fa fa-expand biru desc2"></i>60 M² 
          </figcaption>

          <figcaption class="caption">
            <b>PURING  </b><i class="fa fa-user biru desc2"></i>10-15 Orang <i class="fa fa-expand biru desc2"></i>24 M²
          </figcaption>
        </figure>

      </div>
    </div>

    <div class="row" style="margin-top:50px;">
      <div class="col-sm-4 col-sm-offset-4">
        <center><a href="/id/meeting-reservation" class="bookbtn">RESERVASI</a></center>
      </div>
    </div>

  </div>



  <footer id="footer">
    <div class="footer-bottom">
      <div class="container putih" >
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3">
            <div class="social-icons">
              <ul>
                <li><a class="envelope" href="#"><i class=" fa fa-envelope"></i></a></li>
                <li><a class="twitter" href="#"><i class=" fa fa-twitter"></i></a></li> 
                <li><a class="dribbble" href="#"><i class=" fa fa-dribbble"></i></a></li>
                <li><a class="facebook" href="#"><i class=" fa fa-facebook"></i></a></li>
                <li><a class="linkedin" href="#"><i class=" fa fa-linkedin"></i></a></li>
                <li><a class="tumblr" href="#"><i class=" fa fa-tumblr-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row text-center">
            <p><br><br>Copyright 2017, Alia Hotels Group. All Rights Reserved<br>
            </p>
        </div>

      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/mousescroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>