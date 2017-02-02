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
    <script src="{{ URL::asset('js/html5shiv.js') }}"></script>
    <script src="{{ URL::asset('js/respond.min.js') }}"></script>
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
          <a class="navbar-brand" href="/id">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap2.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="/id">Beranda</a></li>
            <li ><a href="/id/gallery">Galeri</a></li> 
            <li ><a href="/id/suites" >Kamar & Suite</a></li>                     
            <li ><a href="/id/meetings">Ruang Rapat</a></li>
            <li><a href="/id/wedding">Pernikahan</a></li>
            <li><a href="/id/room-reservationind" style="color:#dbb13b;">reservasi</a></li>  
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
        <h1> <b>R</b>ESERVASI RUANG RAPAT</h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->



  <div class="container" style="padding-bottom: 10px ;margin-top:25px; margin-bottom: 25px;">
    <div class="row">          
      <form name="meeting-form" method="post" action="meeting-reservation-auth">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
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
           <h2 class="black">Informasi Acara</h2>
            <div class="form-group">
              <input type="text" name="ename" class="form-control" placeholder="Nama acara" required="required">
            </div>
            <div class="form-group">
              <input type="text" name="epurpose" class="form-control" placeholder="Tujuan acara" required="required">
            </div>
            <div class=" form-group select-style">
              <select required="required" class="form-control" name="room">
                <option value="" selected disabled>Pilih Ruang Rapat</option>
                <option value="1">Puring</option>
                <option value="2">Taram Besi</option>
                <option value="3">Sepatu Dea</option>
                <option value="3">Adelia</option>
                <option value="3">Ketapang Kencana</option>

              </select>
            </div>     
            <div class="form-group">
              <input class="form-control number-only2" placeholder="Perkiraan jumlah kedatangan" type="number" min="0" name="attendees">
              <span id="errmsg2"></span>
            </div>
            <div class="form-group">
              <input class="form-control number-only3" placeholder="Perkiraan jumlah kamar tamu" type="number" min="0" name="roomcount">
              <span id="errmsg3"></span>  
            </div>

            <div class="form-group">
              <div class="input-group">
                  <input  class="form-control" placeholder="Tanggal mulai acara"  id="datetimegw" name="startdate">
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
                <input  class="form-control" type="text" placeholder="Tanggal acara selesai"  id="datetimegw2" name='enddate'>
                <span class="input-group-addon">
                    <span class="glyphicon glyphicon-calendar"></span>
                </span>
            </div>
                <script src="{{ URL::asset('js/jquery.js') }}') }}"></script>
                <script src="{{ URL::asset('js/bootstrap-datepicker.js') }}') }}') }}"></script>
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
          <h2 class="black">Informasi Kontak</h2>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="fname" class="form-control" placeholder="Nama Depan" required="required">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" name="lname" class="form-control" placeholder="Nama Belakang" required="required">
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="tel" name="pnumb" class="form-control number-only" placeholder="No HP" required="required"><span id="errmsg"></span>
            </div>
            <div class="form-group">
              <input type="email" name="meetingemail" class="form-control" placeholder="Email" required="required">
            </div>
            <div class="form-group">
              <input type="text" name="company" class="form-control" placeholder="Perusahaan/Asosiasi" required="required">
            </div>               
        </div>  
      </div>                            

    <div class="row">
      <div class="col-sm-4 col-sm-offset-4">
        <button type="submit" class="bookbtn2">Kirim Reservasi</button>
      </div>
      </form>
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