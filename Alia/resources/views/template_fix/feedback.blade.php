<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HOTEL GRAND ALIA PRAPATAN</title>
  <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">

  <link href="{{ URL::asset('css/animate.min.css') }}" rel="stylesheet"> 
  <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/main.css') }}" rel="stylesheet">

  <link id="css-preset" href="{{ URL::asset('css/presets/preset1.css') }}" rel="stylesheet">
  <link href="{{ URL::asset('css/responsive.css') }}" rel="stylesheet">
  <!--DATE TIME PICKER-->
  <link href="{{ URL::asset('css/datepicker.css') }}" rel="stylesheet">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.ico') }}">
</head><!--/head-->

<body>
  <!--.preloader-->
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
            <li ><a href="/en/suites" >ROOMS & SUITES</a></li>                     
            <li ><a href="/en/meetings" >MEETINGS</a></li>
            <li ><a href="/en/wedding">WEDDINGS</a></li>
            <li><a href="/en/room-reservation">BOOK NOW</a></li>  
            <li><a href="/en/feedback" style="color:#dbb13b;">CONTACT US</a></li>

            <li><a href="feedbackind.html"><img class="img-responsive" src="{{ URL::asset('images/indonesia.png') }}" height="25" width="25" alt="logo"></a></li>     
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="feedbackhead" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1> <b>F</b>EEDBACK</h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->



  <div class="container" style="padding-bottom: 10px ;margin-top:25px; margin-bottom: 25px;">
    <div class="row">
      <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <form id="feedbackemail" name="contact-form" method="post" action="feedback-auth">
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
           <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required="required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="lname" class="form-control" placeholder="Last Name" required="required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="email" name="meetingemail" class="form-control" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
              <textarea name="message" id="message" class="form-control" rows="4" placeholder="Enter your message" required="required"></textarea>
            </div>       
            
            <button type="submit" class="bookbtn2">Send</button>
     
        </form>   
      </div>
      <div class="col-sm-6">
        <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <p style="font-size: 18px;">Rate us on traveloka, please click <a href="https://www.traveloka.com/hotel/indonesia/hotel-gren-alia-prapatan-3000010007125?spec=28-1-2017.30-1-2017.2.1.HOTEL.3000010007125.Hotel%20Gren%20Alia%20Prapatan,%20Jakarta%20Pusat,%20Jakarta,%20Indonesia.1">here</a>.</p>

        </div>                            
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


  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>