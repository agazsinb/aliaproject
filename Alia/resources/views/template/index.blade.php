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
  <script type="text/javascript" src="js/main.js"></script>


  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
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
    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">

            <div class="active item">
                <div class="fill" style="background-image: url({{ URL::asset('images/slider/homepage1.jpg')}})"></div>
            </div>
            <div class="item"></div>
            <div class="item"></div>
        </div>
        <!-- Carousel nav -->
    </div>




      <!-- Controls -->
    <div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li><a href="#home">Home</a></li>
            <li ><a href="#services">GALLERY</a></li> 
            <li ><a href="#">ROOMS & SUITES</a></li>                     
            <li ><a href="#">MEETINGS</a></li>
            <li ><a href="#">DINING</a></li>
            <li><a href="#">WEDDINGS</a></li>
            <li><a href="#">BOOK NOW</a></li>       
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>




  <section id="services" style="background-color:#fffeed;">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="col-sm-12">
            <div class=text-center>
              <h2>COMFORTABLE STAY IN THE CENTER OF JAKARTA</h2>
              <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
            </div>
              <br>
              <p style="font-size:16px;padding-top:5px;">3 star comfortable hotel  in jakarta at the heart of city – located in the central city of Jakarta.  Gren Alia Hotel enjoys convenient access to Taman Ismail Marzuki (the Jakarta Cultural Centre) and planetarium  buildings, government offices, embassies, cultural attractions and shopping centres.  Our hotel is not only designed to convey timeless luxury but also to provide a convenience in the city for both business and leisure travellers.

              neeeddd moree text 3 star comfortable hotel  in jakarta at the heart of city – located in the central city of Jakarta.  Gren Alia Hotel enjoys convenient access to Taman Ismail Marzuki (the Jakarta Cultural Centre) and planetarium  buildings, government offices, embassies, cultural attractions and shopping centres.  Our hotel is not only designed to convey timeless luxury but also to provide a convenience in the city for both business and leisure travellers.
              </p>
              <br>

              <div class=text-center>
                <span class="bordered-icon"><i class="fa fa-circle-thin"></i></span>
              </div> 
            </div>

            <br>
        </div>

        <div class="row">
          <div class="col-sm-2">
          </div>

          <div class="col-sm-4 text-center">
            <center>
            <div class="single-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="c100 p85 big orange">
                    <span>85</span>
                    <div class="slice">
                    <div class="bar"></div>
                    <div class="fill"></div>
                    </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4 text-center">
            <h1>85/100</h1>
            <h3>Rates according to 219 guests</h3>

            <p class="lead">Customer satisfaction rating is available by:</p>              
            <center><img class="img-responsive" src="{{ URL::asset('images/Traveloka_2014.png') }}" height="50" width="100" alt=""></center>
          </div>

          <div class="col-sm-2">
          </div>

        </div>

        </div> 
      </div>
    </div>
  </section><!--/#services-->


  <section id="twitter" class="parallax inner-shadow">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-6">
          <p class="lead" style="color:black;">Located in the Central on Jakarta, Gren Alia Cikini Hotel is a perfect place to venue a meeting. With excellent meeting rooms, enjoyable menus and dedicated services, we guarantee a great meeting for everyone. What you’ll receive: fine services and amenities, excellent location in Central of Jakarta, variety of dining, coffee break and beverages selections, capacity up to 300 pax, high speed internet access.</p>
        </div>
        <div class="col-sm-6 col-sm-offset-6">
          <br>
          <br>
          <br>
          <br>
          <br>
          <center><a href="#" class="metbtn">RESERVATION</a></center>
        </div>
      </div>
    </div>
  </section><!--/#twitter-->


  <div class="container" style="padding-bottom: 10px; ">
    <div class="row" style="margin-top: 25px; margin-bottom:25px;">
      <div class="text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
        <h2 class="biru">ROOM & SUITES</h2>
        <p>For more information and pictures about the room & suites please click on details</p>
      </div>
    </div>

    <div class="row">

      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>STANDARD</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>STANDARD</b><br>
                  <large class="navy2">Rp. 500.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">2</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">Single/Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">4 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>    

      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>SUPERIOR</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>SUPERIOR</b><br>
                  <large class="navy2">Rp. 540.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">2</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">Single/Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">4 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>  

      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>DELUXE</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>DELUXE</b><br>
                  <large class="navy">Rp. 590.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">2</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">Single/Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">4 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>  

    </div>

    <br>

    <div class="row">
      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>SUITE</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>SUITE</b><br>
                  <large class="navy">Rp. 730.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">2</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">Single/Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">9 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>  

      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>FAMILY</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>FAMILY</b><br>
                  <large class="navy">Rp. 850.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">4</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">2 Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">8.1 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>  

      <div class="col-sm-4">
          <figure class="thumbnail">
            <div class="view view-first">
              <img src="images/room/2.jpg" />
                <div class="mask">
                    <h2>EXECUTIVE FAMILY</h2>
                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                    <a href="#" class="info">BOOK NOW</a>
                </div>
            </div>  
              <figcaption class="caption">
                <h3 class="biru"><b>EXECUTIVE FAMILY</b><br>
                  <large class="navy">Rp. 930.000</large>
                </h3>
              </figcaption>
              <figcaption class="caption">
                <i class="fa fa-user biru" style=" background-color:transparent; font-size:20px; "></i><b style="margin:0 20px 0 3px; font-size: 20px;">4</b> 
                <i class="fa fa-bed biru" style=" background-color:transparent; font-size:20px;"></i> <b style="margin:0 20px 0 3px; font-size: 16px;">2 Double</b>
                <i class="fa fa-expand biru" style="background-color:transparent; font-size:20px;"></i><b style="margin:0 20px 0 3px; font-size: 16px;">8.2 X 7 M²</b>
              </figcaption>
              <figcaption style="margin-top:20px;">
                <center><a href="#" class="roombtn">DETAILS</a></center>
              </figcaption>

          </figure>
      </div>  

    </div>
  </div>

  <section id="features" class="parallax inner-shadow">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <p class="lead">“Brainstorming your shared value and sense of styles to get perfect wedding then decide what will work best? There is only one name you need to know Alia Wedding organizer”</p>
        </div>
      </div>

      <div class="row" style="margin-top: 30px">
        <div class="col-sm-4"></div>
        <div class="col-sm-4">
          <a href="#" class="wedbtn" style="margin-top: 20px;">ALIA WEDDING</a>
        </div>
        <div class="col-sm-4"></div>
      </div>
    </div>

  </section><!--/#features-->


  <section id="portfolio" style="background-color: black;">
    <div class="container">
      <div class="row">
        <div class="text-center col-sm-4 col-sm-offset-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <a href="#" class="galbtn">GALLERY</a>
        </div>
      </div> 
    </div>
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="images/portfolio/1.jpg" alt="">
            </div>
          </div>
        </div>



      </div>
    </div>

  </section><!--/#portfolio-->

  <section id="about-us" class="parallax">
    <div class="container">
      <div class="row">

        <div class="text-center col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i class="fa fa-map-marker" style=" background-color:transparent; font-size: 8em;"></i>
              <h3> Jl. Cikini Raya No.46, Jakarta 10330 - Indonesia</h3>
            </div>
        <div class="text-center col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i class="fa fa-envelope" style=" background-color:transparent; font-size: 8em;"></i>
              <h3> dummydata@grenalia.com</h3>
            </div>
        <div class="text-center col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
              <i class="fa fa-phone" style=" background-color:transparent; font-size: 8em;"></i>
              <h3>+62 21 230 4000</h3>
            </div>
          </div>
        </div>


      </div>
  </section><!--/#about-us-->

  <section id="contact">
    <div id="google-map" data-latitude="52.365629" data-longitude="4.871331" data-wow-duration="1000ms" data-wow-delay="400ms"></div>    
  </section><!--/#contact-->


  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>English | Bahasa</p>
            <ul class="address">
              <li><i class="fa fa-map-marker"></i> <span> Address:</span> Jl. Prapatan No. 28 Kwitang - Jakarta Pusat 10410 Indonesia</li>
              <li><i class="fa fa-phone"></i> <span> Phone:</span>(021) 34834444</li>
              <li><i class="fa fa-envelope"></i> <span> Email:<a href="mailto:someone@yoursite.com"> support@aliahotel.com</a></span></li>
              <li><i class="fa fa-globe"></i> Website:<a href="#">www.grenaliaprapatanhotel.com</a> </li>
            </ul>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Agazsi Bahasoean</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="js/wow.min.js"></script>
  <script type="text/javascript" src="js/mousescroll.js"></script>
  <script type="text/javascript" src="js/smoothscroll.js"></script>
  <script type="text/javascript" src="js/jquery.countTo.js"></script>
  <script type="text/javascript" src="js/lightbox.min.js"></script>
  <script type="text/javascript" src="js/main.js"></script>

</body>
</html>