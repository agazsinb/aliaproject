<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HOTEL GRAND ALIA CIKINI</title>
  <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/lightbox.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">

  <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/full-slider.css') }}" rel="stylesheet">


  <!-- gallery -->

  <!-- animate.css -->
  <link rel="stylesheet" href="{{ URL::asset('assets/animate/animate.css') }}" />
  <link rel="stylesheet" href="{{ URL::asset('assets/animate/set.css') }}" />

  <!-- gallery -->
  <link rel="stylesheet" href="{{ URL::asset('assets/gallery/blueimp-gallery.min.css') }}">



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
          <a class="navbar-brand" href="/id">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap2.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="/id">Beranda</a></li>
            <li ><a href="/id/gallery" style="color:#dbb13b;">Galeri</a></li> 
            <li ><a href="/id/suites" >KAMAR & SUITE</a></li>                     
            <li ><a href="/id/meetings">RUANG RAPAT</a></li>
            <li><a href="/id/wedding">PERNIKAHAN</a></li>
            <li><a href="/id/room-reservation">RESERVASI</a></li>
            <li ><a href="/id/feedback">SARAN</a></li>
   
            <li><a href="/en/gallery"><img class="img-responsive" src="{{ URL::asset('images/english.png') }}" height="25" width="25" alt="logo"></a></li>    
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="galleryheader" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1> <b>G</b>ALERI</h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->

  <!-- works -->
  <div id="gal"  class=" clearfix grid"> 
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/1.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>LOBBY</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/1.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/2.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>CAFE & RESTAURANT</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/2.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/3.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>RESTAURANT</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/3.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>


  </div>
      
  <div id="gal"  class=" clearfix grid"> 
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/6.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>FAMILY</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/6.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/4.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>SUPERIOR</h2>
               <p><br>
              <a href="{{ URL::asset('images/portfolio/4.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/5.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>SUITE</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/5.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>


  </div>
      
  <div id="gal"  class=" clearfix grid"> 
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/7.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>DELUXE</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/7.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/8.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>FAMILY</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/8.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/9.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>STANDARD</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/9.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>


  </div>

  <div id="gal"  class=" clearfix grid"> 
      <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/10.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>FOOD</h2>
              <p> <br>
              <a href="{{ URL::asset('images/portfolio/10.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/11.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>FOOD</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/11.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>

       <figure class="effect-oscar  wowload fadeInUp">
          <img src="{{ URL::asset('images/portfolio/12.jpg') }}" alt="img01"/>
          <figcaption>
              <h2>FOOD</h2>
              <p><br>
              <a href="{{ URL::asset('images/portfolio/12.jpg') }}" title="1" data-gallery>View more</a></p>            
          </figcaption>
      </figure>


  </div>
      
  <!-- works -->


  <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
  <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls">
      <!-- The container for the modal slides -->
      <div class="slides"></div>
      <!-- Controls for the borderless lightbox -->
      <h3 class="title">Title</h3>
      <a class="prev">‹</a>
      <a class="next">›</a>
      <a class="close">×</a>
      <!-- The modal dialog, which will be used to wrap the lightbox content -->    
  </div>
<!-- jquery -->
<script src="{{ URL::asset('assets/jquery.js') }}"></script>

<!-- wow script -->
<script src="{{ URL::asset('assets/wow/wow.min.js') }}"></script>


<!-- gallery -->
<script src="{{ URL::asset('assets/gallery/jquery.blueimp-gallery.min.js') }}"></script>


<!-- jquery mobile -->
  <script src="{{ URL::asset('assets/mobile/touchSwipe.min.js') }}"></script>
  <script src="{{ URL::asset('assets/respond/respond.js') }}"></script>

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


  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/mousescroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>