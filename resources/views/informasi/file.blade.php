<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambahan Informasi File</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
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
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home <i
                            class="fa fa-home menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#sejarah">Sejarah</a></li>
                        <li><a href="#kelebihan">Kelebihan</a></li>
                        <li><a href="#gambar">Gambar</a></li>
                        <li><a href="#testimonial">Testimonial</a></li>
                        <li><a href="#lokasi">Lokasi</a></li>

                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Link <i
                            class="fa fa-file menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('aboutUs')}}">About Us</a></li>
                        <li><a href="{{url('akun/logout')}}">LogOut</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informasi <i
                            class="fa fa-folder menu-icon"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('informasiTerbaru')}}">Terbaru</a></li>
                        <li><a href="{{url('informasi/gambar')}}/<?=$id?>">Tambahkan Informasi Gambar</a></li>
                        <li><a href="{{url('informasi/file')}}/<?=$id?>">Tambahkan Informasi File</a></li>
                    </ul>
                </li>
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
                    <p style="color: red; font-size: large;"><span class="typed"></span></p>
                    <div class="spacer"></div>
                </div>
            </div><!-- row -->
        </div><!-- /container -->
    </div><!-- /headerwrap -->

    <div id="content-wrapper">
        <section id="about" class="section-wrapper">
            <div class="container">
                <form action="/file/proses/{{$id}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <h1>Tambahakan Informasi baru berupa Pdf atau docs</h1>
                    <input type="file" name="file">
                    @if ($errors->has('file'))
                        {{ $errors->first('file')}}
                    @endif
                    <textarea name="deskripsi" cols="30" rows="10"></textarea>
                    @if ($errors->has('deskripsi'))
                        {{ $errors->first('deskripsi')}}
                    @endif
                    <button type="submit">Submit</button>
                </form>
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

</body>
</html>
