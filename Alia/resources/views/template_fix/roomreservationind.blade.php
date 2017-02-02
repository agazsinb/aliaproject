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

  <!-- wizard form-->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        //Initialize tooltips
        $('.nav-tabs > li a[title]').tooltip();
        
        //Wizard
        $('a[data-toggle="tab"]').on('show.bs.tab', function (e) {

            var $target = $(e.target);
        
            if ($target.parent().hasClass('disabled')) {
                return false;
            }
        });

        $(".next-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            $active.next().removeClass('disabled');
            nextTab($active);

        });
        $(".prev-step").click(function (e) {

            var $active = $('.wizard .nav-tabs li.active');
            prevTab($active);

        });
    });

    function nextTab(elem) {
        $(elem).next().find('a[data-toggle="tab"]').click();
    }
    function prevTab(elem) {
        $(elem).prev().find('a[data-toggle="tab"]').click();
    }    
  </script>

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
          <a class="navbar-brand" href="/id/">
            <h1><img class="img-responsive" src="{{ URL::asset('images/logo-gap2.png') }}" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li ><a href="/id/">Beranda</a></li>
            <li ><a href="/id/gallery">Galeri</a></li> 
            <li ><a href="/id/suites">Kamar & Suite</a></li>                     
            <li ><a href="/id/meetings">Ruang Rapat</a></li>
            <li><a href="/id/wedding">Pernikahan</a></li>
            <li><a href="/id/room-reservation" style="color:#dbb13b;">reservasi</a></li>  
            <li ><a href="/id/feedback">Saran</a></li>

            <li><a href="/en/room-reservation"><img class="img-responsive" src="{{ URL::asset('images/english.png') }}" height="25" width="25" alt="logo"></a></li>     
          </ul>
        </div>
      </div>
      </div><!--/#main-nav-->
  </header>


  <section id="roomreservation" class="parallax inner-shadow" style="margin-top: 50px;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-12">
        <h1> <b>R</b>ESERVASI KAMAR </h1>
        </div>
      </div>
    </div>

  </section><!--/#features-->

<div class="container">
  <div class="wizard">
      <div class="wizard-inner">
          <div class="connecting-line"></div>
          <ul class="nav nav-tabs" role="tablist">

              <li role="presentation" class="active">
                  <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-duplicate"></i>
                      </span>
                  </a>
              </li>

              <li role="presentation" class="disabled">
                  <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-pencil"></i>
                      </span>
                  </a>
              </li>
              <li role="presentation" class="disabled">
                  <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-calendar"></i>
                      </span>
                  </a>
              </li>

              <li role="presentation" class="disabled">
                  <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                      <span class="round-tab">
                          <i class="glyphicon glyphicon-ok"></i>
                      </span>
                  </a>
              </li>
          </ul>
      </div>

      <form role="form" name="room-form" method="post" action="room-reservation-auth">
      <input type="hidden" name="_token" value="{{{ csrf_token() }}}"/>
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
          <div class="tab-content">
              <div class="tab-pane active" role="tabpanel" id="step1">
                <div class="row" style="margin-bottom: 30px"><h2 class="black">KETENTUAN RESERVASI</h2></div>
                <div class="row">
                  <div class="col-sm-6">
                    <h3 class="black">JAMINAN RESERVASI KAMAR</h3>
                    <ul>
                      <li>Pembayaran harus diterima sebelum tanggal kedatangan untuk mendapatkan jaminan reservasi kamar.</li>
                      <li>Pembayaran reservasi grup harus diterima 2 (dua) pekan sebelum tanggal kedatangan atau bisa ditransfer lewat bank.</li>
                      <li>Pemesanan yang tidak mendapatkan jaminan reservasi hanya akan dijadwalkan sampai pukul 14.00 WIB pada tanggal kedatangan dan 2 (dua) pekan sebelum tanggal kedatangan reservasi grup.</li>
                    </ul>                    
                    <h3 class="black">KETENTUAN UMUM</h3>
                      <ul>
                        <li>Tarif kamar berubah setiap tanggal 30-31 Desember (tarif tahun baru).</li>
                        <li>Tarif kamar sudah termasuk sarapan prasmanan.</li>
                        <li>Waktu pendaftaran ulang (check-in) adalah pukul 14.00 WIB dan waktu keluar (check-0ut) adalah pukul 12.00 siang WIB.</li>
                        <li>Hanya pasangan yang sudah menikah yang boleh berada pada kamar yang sama.</li>
                        <li>Anak-anak dibawah 12 tahun boleh satu kamar bersama orang tuanya.</li>
                        <li>Antar jemput bandara tidak tersedia.</li>
                      </ul>
                  </div>

                  <div class="col-sm-6">
                    <h3 class="black">PEMBATALAN</h3>
                    <ul>
                      <li>Kami tidak menerima pembatalan atau perubahan.</li>
                      <li>Hotel Alia tidak menerima pembatalan atau perubahan pada pemesanan.</li>
                      <li>Tidak melayani pengembalian dana.</li>
                    </ul>
                    <h3 class="black">TIDAK DATANG</h3>
                    <u>Jika tidak datang pada jadwal kedatangan reservasi yang telah dikonfirmasi, maka akan tetap dikenakan biaya inap satu malam.</u>
                  </div>
                </div>
                <div class="row">
                  <center>
                  <ul class="list-inline">
                      <li><button type="button" class="conbtn next-step">Lanjutkan</button></li>
                  </ul>
                  </center>
                </div>
              </div>
              <div class="tab-pane" role="tabpanel" id="step2">
                <div class="row">
                <div class="col-sm-6 col-sm-offset-3" >              
                  <h2 class="black">Data Kontak</h2>
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
                      <input type="tel" name="pnumb" class="form-control number-only" placeholder="No HP" required="required">
                      <span id="errmsg"></span>
                    </div>
                    <div class="form-group">
                      <input type="email" name="cusemail" class="form-control" placeholder="Alamat Email" required="required">
                    </div>
                    <div class="form-group">
                      <input type="text" name="cusadrs" class="form-control" placeholder="Alamat" required="required">
                    </div>                
                </div>
                </div>
                <div class="row">
                  <center>
                  <ul class="list-inline">
                      <li><button type="button" class="prevbtn prev-step">Kembali</button></li>
                      <li><button type="button" class="conbtn next-step">Lanjutkan</button></li>
                  </ul>
                  </center>
                </div>
              </div>
              <div class="tab-pane" role="tabpanel" id="step3">
                <div class="row">
                  <div class="col-sm-6 col-sm-offset-3">
                     <h2 class="black">Data Kamar</h2>

                      <div class="form-group">
                        <div class="input-group">
                            <input  class="form-control" placeholder="Tanggal Kedatangan"  id="datetimegw" name="checkin">
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
                          <input  class="form-control" type="text" placeholder="Tanggal Kepulangan"  id="datetimegw2" name="checkout">
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

                      <div class="form-group">
                        <input class="form-control number-only2" placeholder="Jumlah Tamu" type="number" min="0" name="guests">
                        <span id="errmsg2"></span>
                      </div>

                      <div class=" form-group select-style">
                        <select required="required" class="form-control" name="room">
                          <option value="" selected disabled>Tipe Kamar</option>
                          <option value="1">STANDARD</option>
                          <option value="2">SUPERIOR</option>
                          <option value="3">DELUXE</option>
                          <option value="3">SUITE</option>
                          <option value="3">FAMILY</option>
                          <option value="3">EXECUTIVE FAMILY</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <input class="form-control number-only3" placeholder="Jumlah Kamar" type="number" min="0" name="numofrooms">
                        <span id="errmsg3"></span>
                      </div>

                      <div class=" form-group select-style">
                        <select required="required" class="form-control" name="payment">
                          <option value="" selected disabled>Payment type</option>
                          <option value="1">CASH</option>
                          <option value="2">BANK TRANSFER</option>
                          <option value="3">CREDIT CARD</option>
                        </select>
                      </div>        
                  </div>   
                </div>
                <div class="row">
                <center>
                  <ul class="list-inline">
                      <li><button type="button" class="prevbtn prev-step">Kembali</button></li>
                      <li><button type="submit" class="conbtn btn-info-full next-step">Lanjutkan</button></li>
                  </ul>
                </center>
                </div>
              </div>
              <div class="tab-pane" role="tabpanel" id="complete">
                  <h2 class="biru text-center"><b>BOOKING CONFIRMED</b></h2>
                  <p class="text-center" style="font-size: 18px;">Anda akan menerima email konfirmasi, mohon untuk memeriksa JUNK box anda.<br>
                  <br><br>BILA ADA MASALAH MOHON MENGHUBUNGI (021) 34832666 
                  <br><br><u>Jika tidak datang pada jadwal kedatangan reservasi yang telah dikonfirmasi, maka akan tetap dikenakan biaya inap satu malam.</u>
                  <br><br>-Alia Prapatan Hotel Team.</p>
              </div>
              <div class="clearfix"></div>
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