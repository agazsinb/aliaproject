<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>HOTEL GRAND ALIA CIKINI</title>
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
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="#home">Home</a></li>
            <li ><a href="#services">GALLERY</a></li> 
            <li ><a href="#" >ROOMS & SUITES</a></li>                     
            <li ><a href="#" style="color:#00aeff;">MEETINGS</a></li>
            <li ><a href="#">DINING</a></li>
            <li><a href="#">WEDDINGS</a></li>
            <li><a href="#">BOOK NOW</a></li>       
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="meetingroom" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1> <b>M</b>EETING RESERVATION</h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->


  <form name="meeting-form" method="post" action="mail">
  <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
  <div class="container" style="padding-bottom: 10px ;margin-top:25px; margin-bottom: 25px;">
    <div class="row">          
        <!--NUMBER ONLY VALIDATION-->
        <script type="text/javascript">
            $(function(){

              $('.number-only').keypress(function(e) {
              if(isNaN(this.value+""+String.fromCharCode(e.charCode))){
                    $("#errmsg").html("Digits Only").show().fadeOut("slow");
                    return false;}

              });

            });
        </script>

        <script type="text/javascript">
            $(function(){

              $('.number-only2').keypress(function(e) {
              if(isNaN(this.value+""+String.fromCharCode(e.charCode))){
                    $("#errmsg2").html("Digits Only").show().fadeOut("slow");
                    return false;}

              });

            });
        </script>

        <script type="text/javascript">
            $(function(){

              $('.number-only3').keypress(function(e) {
              if(isNaN(this.value+""+String.fromCharCode(e.charCode))){
                    $("#errmsg3").html("Digits Only").show().fadeOut("slow");
                    return false;}

              });

            });
        </script>
        <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
           <h2 class="black">Event Information</h2>
            <div class="form-group">
              <input type="tel" name="ename" class="form-control" placeholder="Event Name" required="required">
            </div>
            <div class="form-group">
              <input type="tel" name="epurpose" class="form-control" placeholder="Event Purpose" required="required">
            </div>
            <div class=" form-group select-style">
              <select required="required" class="form-control" name="room">
                <option value="" selected disabled>Meeting Room Selection</option>
                <option value="1">Puring</option>
                <option value="2">Taram Besi</option>
                <option value="3">Sepatu Dea</option>
                <option value="3">Adelia</option>
                <option value="3">Ketapang Kencana</option>

              </select>
            </div>     
            <div class="form-group">
              <input class="form-control number-only2" placeholder="Estimated Number of Attendees" type="number" min="0" name="attendees">
              <span id="errmsg2"></span>
            </div>
            <div class="form-group">
              <input class="form-control number-only3" placeholder="Estimated Guests Room Count" type="number" min="0" name="roomcount">
              <span id="errmsg3"></span>  
            </div>

            <div class="form-group">
              <div class="input-group">
                  <input  class="form-control" placeholder="Event Start Dates"  id="datetimegw" name="startdate">
                  <span class="input-group-addon">
                      <span class="glyphicon-calendar glyphicon "></span>
                  </span>
              </div>
                <script src="{{ URL::asset('js/jquery.js') }}"></script>
                <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
                <script type="text/javascript">
                    // When the document is ready
                var nowTemp = new Date();
                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                 
                var checkin = $('#datetimegw').datepicker({
                  onRender: function(date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                  }
                }).on('changeDate', function(ev) {
                  if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                  }
                  checkin.hide();
                  $('#datetimegw')[0].focus();
                }).data('datepicker');
                var checkout = $('#datetimegw').datepicker({
                  onRender: function(date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                  }
                }).on('changeDate', function(ev) {
                  checkout.hide();
                }).data('datepicker');

                </script>
            </div>

            <div class="form-group input-group">
                <input  class="form-control" type="text" placeholder="Event End Dates"  id="datetimegw2" name="enddate">
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
                <script src="{{ URL::asset('js/jquery.js') }}"></script>
                <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}"></script>
                <script type="text/javascript">
                    // When the document is ready
                var nowTemp = new Date();
                var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
                 
                var checkin = $('#datetimegw2').datepicker({
                  onRender: function(date) {
                    return date.valueOf() < now.valueOf() ? 'disabled' : '';
                  }
                }).on('changeDate', function(ev) {
                  if (ev.date.valueOf() > checkout.date.valueOf()) {
                    var newDate = new Date(ev.date)
                    newDate.setDate(newDate.getDate() + 1);
                    checkout.setValue(newDate);
                  }
                  checkin.hide();
                  $('#datetimegw2')[0].focus();
                }).data('datepicker');
                var checkout = $('#datetimegw2').datepicker({
                  onRender: function(date) {
                    return date.valueOf() <= checkin.date.valueOf() ? 'disabled' : '';
                  }
                }).on('changeDate', function(ev) {
                  checkout.hide();
                }).data('datepicker');

                </script>
        </div>    
        <div class="col-sm-6 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">              
          <h2 class="black">Contact Information</h2>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="First Name" required="required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="email" name="lname" class="form-control" placeholder="Last Name" required="required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="tel" name="pnumb" class="form-control number-only" placeholder="Phone Number" required="required"><span id="errmsg"></span>
            </div>
            <div class="form-group">
              <input type="tel" name="meetingemail" class="form-control" placeholder="Email Address" required="required">
            </div>
            <div class="form-group">
              <input type="tel" name="company" class="form-control" placeholder="Company/Assocation" required="required">
            </div>               
        </div>  
      </form>    
      </div>                            

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <button type="submit" class="bookbtn2">Send Reservation</button>
      </div>

    </div>
  </div>
  </form>


  <footer id="footer">
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p><u>English</u> | Bahasa</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Alia Hotel Group</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.inview.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/wow.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/mousescroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/smoothscroll.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.countTo.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/lightbox.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

</body>
</html>