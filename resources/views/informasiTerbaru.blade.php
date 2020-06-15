<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico">

    <!-- css -->
    <link href="{{url('assets/css/bootstrap.css')}}" rel="stylesheet">

    <link href="{{url('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet">


    <!-- js -->
    <script src="{{url('assets/js/jquery.js')}}"></script>
    <script src="{{url('assets/js/modernizr.custom.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            jQuery('#headerwrap').backstretch([
                "assets/gambar/1.jpg",
                "assets/gambar/11.jpg",
                "assets/gambar/13.jpg",
                "assets/gambar/7.jpg",
                "assets/gambar/8.jpg"
            ], { duration: 8000, fade: 500 });

            // Map Position And Settings
            $("#mapwrapper").gMap({
                controls: false,
                scrollwheel: false,
                markers: [{
                    latitude: 40.7566,
                    longitude: -73.9863,
                    icon: {
                        image: "assets/img/marker.png",
                        iconsize: [44, 44],
                        iconanchor: [12, 46],
                        infowindowanchor: [12, 0]
                    }
                }],
                icon: {
                    image: "assets/img/marker.png",
                    iconsize: [26, 46],
                    iconanchor: [12, 46],
                    infowindowanchor: [12, 0]
                },
                latitude: 40.7566,
                longitude: -73.9863,
                zoom: 14
            });
        });
    </script>
</head>

<body>


    <!-- NAV -->
    <nav class="menu" id="theMenu">
        <div class="menu-wrap">
            <i class="fa fa-bars menu-close"></i>
            <div id="menu-logo">
                <h2><span class="pe-7s-chat logo-icon"></span>Hatulian</h2>
            </div>
            <ul id="main-menu">
                <li><a href="{{url('/')}}" class="search-trigger">Home <i class="fa fa-home menu-icon"></i></a></li>
                <li><a href="{{url('aboutUs')}}" class="search-trigger">About Us <i class="fa fa-file menu-icon"></i></a></li>
                <li><a href="{{url('informasiTerbaru')}}" class="search-trigger">Informasi Terbaru <i class="fa fa-folder menu-icon"></i></a></li>
            </ul>

            <ul id="social-icons">
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li>
            </ul>
        </div>
    </nav>
    <!-- END NAV -->

    <div id="headerwrap">
        <div class="container">
            <div class="row">
                <div id="bannertext" class="col-lg-8 col-lg-offset-2">
                    <h1>Pantai Hatulian</h1>
                    <p style="color: red; font-size: large;"><span class="typed" data-typed-items="Welcome, Laguboti, TOBA, Sumatera utara"></span></p>
                    <div class="spacer"></div>
                </div>
            </div><!-- row -->
        </div><!-- /container -->
        <span class="headerwrap-btn-wrap">
            <a href="#content-wrapper" class="headerwrap-btn"><i class="fade-up fa fa-angle-down"></i></a>
        </span>
    </div><!-- /headerwrap -->

    <div id="content-wrapper">
        <section>
        <h2 style="text-align: center;">Daftar Informasi Terbaru</h2>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
        @foreach ($informasiImage as $image)
        <section id="courses" class="courses" style="border: 2px solid black; margin:5px; padding : 10px;">
            <div class="container" data-aos="fade-up">

              <div class="row" data-aos="zoom-in" data-aos-delay="100">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                  <div class="course-item">
                    <img src="{{ url('assets/upload/'.$image->name)}}" class="img-fluid" alt="...">
                    <div class="course-content">
                      <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4>
                            Updated At : {{$image->updated_at}}
                        </h4>

                      </div>
                      <h4>
                        Created by : {{$image->nama}}
                      </h4>
                      <p>
                        Deskription : {{$image->deskripsi}}
                      </p>
                    </div>
                  </div>
                </div> <!-- End Course Item-->
              </div>

            </div>
          </section><!-- End Courses Section -->
        @endforeach
                    </div>
                    <div class="col-md-6">
        @foreach ($informasifile as $file)
            <section id="courses" class="courses" style="border: 2px solid black; margin:5px; padding : 10px;">
                <div class="container" data-aos="fade-up">

                <div class="row" data-aos="zoom-in" data-aos-delay="100">

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="course-item">
                        <p>File :  <a href="{{'assets/upload/'.$file->name}}">{{$file->name}}</a></p>
                        <div class="course-content">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4>
                                Updated At : {{$file->updated_at}}
                            </h4>

                        </div>
                        <h4>
                            Created by : {{$file->nama}}
                        </h4>
                        <p>
                            Deskription : {{$file->deskripsi}}
                        </p>
                        </div>
                    </div>
                    </div> <!-- End Course Item-->
                </div>

                </div>
            </section><!-- End Courses Section -->
        @endforeach
                    </div>
                </div>
            </div>
        </section>
    </div>

    	<!-- MAIN FOOTER -->
	<div id="footerwrap">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<h4 class="widget-title">Kampus Kami</h4>
					<p>Institute Teknologi Del</p>
				</div><!--col-lg-4-->
				<div class="col-lg-4">
					<h4 class="widget-title">Alamat</h4>
					<p>Desa Sitoluama<br/>
					Kec. Laguboti<br/>
					Kab. Toba<br/>
                    SUMUT <br/>
                    Kode Pos: 22381
					</p>
                </div><!--col-lg-4-->
                <div class="col-lg-4">
					<h4 class="widget-title">Contact</h4>
					<p>
                    Telp: +62 632 331234<br/>
					Fax: +62 632 331116<br/>
					Website: http://www.del.ac.id<br/>
					Email: info@del.ac.id
					</p>
				</div><!--col-lg-4-->
			</div><!-- row -->
		</div>
		<div id="footer-copyright">
			<div class="container">
				Dibuat oleh tim PA 5, Mahasiswa IT Del
			</div>
		</div>
	</div>

	<a id="gototop" class="gototop no-display" href="#"><i class="fa fa-angle-up"></i></a>
    <!-- END MAIN FOOTER -->

    <script src="{{url('assets/js/bootstrap.min.js')}}"></script>
	<script src="{{url('assets/js/plugins.js')}}"></script>
    <script src="{{url('assets/js/init.js')}}"></script>
    <script src="{{url('assets/js/typed.min.js')}}"></script>
<script>
!(function($) {
  "use strict";

  // Hero typed
  if ($('.typed').length) {
    var typed_strings = $(".typed").data('typed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.typed', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 50,
      backDelay: 2000
    });
  }
})(jQuery);
</script>
</body>

</html>
