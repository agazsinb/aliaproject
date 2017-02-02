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
  <link rel="shortcut icon" href="images/favicon.ico">
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
          <a class="navbar-brand" href="/en">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap2.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="/en">Home</a></li>
            <li ><a href="/en/gallery">GALLERY</a></li> 
            <li ><a href="/en/suites" style="color:#dbb13b;">ROOMS & SUITES</a></li>                     
            <li ><a href="/en/meetings">MEETINGS</a></li>
            <li><a href="/en/wedding">WEDDINGS</a></li>
            <li><a href="/en/room-reservation">BOOK NOW</a></li>  
            <li ><a href="/en/feedback">CONTACT US</a></li>

            <li><a href="/id/family"><img class="img-responsive" src="{{ URL::asset('images/indonesia.png') }}" height="25" width="25" alt="logo"></a></li>     
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="famhead" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1> <b>F</b>AMILY ROOM</h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->

  <div class="container" style="padding-bottom: 10px ;margin-top:25px; margin-bottom: 25px;">
    <div class="row">
      <div class="col-sm-8" style="height:400px">
          <div id="carousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
            </ol>
            <!-- Carousel items -->
            <div class="carousel-inner">
                <div class="active item">
                    <div class="fill img-responsive" style="background-image: url({{ URL::asset('images/room/family/family.jpg') }}); height:400px; width:750px;"></div>
                </div>
                <div class="item">
                    <div class="fill img-responsive" style="background-image: url({{ URL::asset('images/room/family/family1.jpg') }}); height:400px; width:750px;"></div>
                </div>
                <div class="item">
                    <div class="fill img-responsive" style="background-image: url({{ URL::asset('images/room/family/family.jpg') }}); height:400px; width:750px;"></div>
                </div>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#carousel" data-slide="prev"><b>&lsaquo;</b></a>
            <a class="carousel-control right" href="#carousel" data-slide="next"><b>&rsaquo;</b></a>
        </div>
      </div>

      <div class="col-sm-4">
        <figure class="thumbnail" style="margin-bottom:10px;font-size: 20px;">

          <figcaption class="caption">
            <i class="fa fa-user biru desc"></i>4 Person
          </figcaption>

          <figcaption class="caption">
            <i class="fa fa-bed biru desc"></i>2 Double Bed
          </figcaption>

          <figcaption class="caption">
            <i class="fa fa-expand biru desc"></i>8.1 X 7 M (56.7 M²)
          </figcaption>
        </figure>

        <div class="panel-group" id="accordion">
            <div class="panel">
                <h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><b class="biru">Room Facility</b></a>
                </h4>
                <div id="collapseOne" class="panel-collapse collapse in">
                    <div class="panel-body">
                        <p style="font-size:16px;">2 AC (1PK & 2PK) <i class="fa fa-circle-o biru"></i> TV 40 Inch <i class="fa fa-circle-o biru"></i> Refrigerator <i class="fa fa-circle-o biru"></i> Free Wi-Fi <i class="fa fa-circle-o biru"></i> Coffee & Tea Maker <i class="fa fa-circle-o biru"></i> Balcony <i class="fa fa-circle-o biru"></i> Fasilities sets for 4 person</p>
                    </div>
                </div>
            </div>
            <div class="panel">
                <h4>
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><b class="biru">Hotel Facility</b></a>
                </h4>
                <div id="collapseTwo" class="panel-collapse collapse">
                    <div class="panel-body">
                        <p style="font-size: 16px;">24 Hours room service <i class="fa fa-circle-o biru"></i> Restaurant <i class="fa fa-circle-o biru"></i> Laundry <i class="fa fa-circle-o biru "></i> Meeting Room <i class="fa fa-circle-o biru"></i> Business Center <i class="fa fa-circle-o biru"></i> Parking <i class="fa fa-circle-o biru"></i> Non-Smoking Room</p>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

    <div class="row" style="margin-top: 10px;">
      <div class="col-sm-4">
        <h1><b class="navy text-center">Rp. 850.000/Night</b></h1>
        <b>Extra Bed - Rp. 220.000<br>
        Extra Person - Rp. 205.000<br></b>
        Rates are Including Tax & Service + Breakfast<br>
        Rates are subject to change without notice<br>
        Group rate available on request
      </div>
      <br>
      <div class="col-sm-4">
        <center><a href="/en/room-reservation" class="bookbtn">BOOK NOW</a></center>
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
            Designed by Agazsi Bahasoean</p>
        </div>

      </div>
    </div>
  </footer>

  <script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/mousescroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>