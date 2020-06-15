{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laman</title>
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 border">
                <h1>
                    halaman informasi terbaru
                </h1>
            </div>
            <div class="col-md-4">
                <h2>
                    Halaman terkait
                </h2>
            </div>
        </div>
    </div>

    <div class="conteiner">
        <h1 class="text-center">Tambahkan informasi anda</h1>
        <h3>Pilih kategori</h3>
        <a href="{{url('informasi/gambar')}}/<?=$id?>">Gambar</a>
        <a href="{{url('informasi/file')}}/<?=$id?>">Pdf atau docx</a>
    </div>
    <a href="{{url('/akun/logout')}}">logout</a>
</body>
</html> --}}
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
        <section id="about" class="section-wrapper">
            <div class="container">
                <div class="centered gap fade-down section-heading">
                    <h2 class="main-title">Pantai Hatulian</h2>
                    <hr>
                    <p>Desa Ompu Raja Hatulian, Kec.laguboti, Kab.TOBA, SUMUT</p>
                </div>

                <div class="row gap">
                    <div class="col-md-8 col-md-offset-2">
                        <img src="{{url('assets/gambar/1.jpg')}}" class="fade-up img-responsive" alt="Alt" />
                    </div>
                </div>

                <div class="row gap">
                    <div class="col-md-8 fade-up">
                        <p id="sejarah">
							Pantai hatulian berada di Desa Ompu Raja Hatulian. Desa ini memiliki sejarah yang unik, yang sangat penting untuk dijaga dan dilestarikan bersama.
							Ada sebuah cerita yang unik dari desa ini yang menjadikannya menjadi cerita yang melekat bagi masyarakat pantai hatulian. Pada jaman dahulu,
							ada seorang bayi yang telah ditinggalkan oleh kedua orang tuanya, hanya ada ito (saudara perempuan si bayi) dan kambing yang menyusui bayi tersebut.
							singkat cerita bayi itu dewasa dan diyakini bahwa dari bayi itulah lahir warga desa Ompu Raja hatulian.
							Sehingga di desa ompu raja hatulian terdapat sebuah patung kambing, dan dari cerita warga desa Ompu Raja hatulian, terdapat sebuah
							larangan bagi masyarakat desa Ompu Raja hatulian untuk tidak memakan daging kambing dan itu sudah menjadi tradisi bagi masyarakat desa Ompu Raja hatulian.
						</p>
                        <p>
							Desa Ompu Raja Hatulian pada awalnya merupakan wilayah desa Lumban Binanga, tetapi pada tahun
							2011 desa Ompu Raja Hatulian memilih untuk memekarkan diri dengan nama Desa Ompu Raja Hatulian. Seperti yang
							telah diceritakan di atas, nama desa Ompu Raja Hatulian berasal dari nama nenek moyang mereka yang
							memiliki 3 orang anak yaitu Parjonggaran (anak pertama), aek simare, dan lumban sidari.

							Desa Ompu Raja Hatulian merupakan daerah yang cukup luas yaitu sekitar 160 hektar dengan lahan pertanian
							sekitar 80 hektar. Jumlah penduduk di desa ini sekitar 400 jiwa atau 120 kepala keluarga dengan mata pencaharian
							pertanian, nelayan, dan ternak. Kebanyakan masyarakat di desa ini memiliki marga hutajulu.
						</p>
						<p>
							Pantai Hatulian merupakan pantai baru yang sedang dalam pembangunan oleh
							kementerian Pariwisata dan Ekonomi kreatif RI yang terletak di desa Ompu Raja Hatulian,
							kecamatan Laguboti, kabupaten TOBA, Sumatera Utara. Pantai ini memiliki luas sekitar 2 hektar,
							dengan jumlah penduduk sekitar 400 jiwa.
							Pantai ini terkenal dengan kelokalan masyarakatnya, dengan
							budaya batak yang menyelimutinya dan jauh dari perkotaan dapat menjadikan jiwa menjadi tenang apabila mengunjungi pantai ini.
						</p>

                    </div>
                    <div class="col-md-4">
                        <div class="qa-message-list" id="wallmessages">
                            <div class="message-item fade-up" id="m16">
                                <div class="message-inner">
                                    <div class="message-head clearfix">
                                        <div class="user-detail">
                                            <h5 class="handle">Pembentukan Desa</h5>
                                            <div class="post-meta">
                                                <div class="asker-meta">
                                                    <span class="qa-message-what"></span>
                                                    <span class="qa-message-when">
                                                        <span class="qa-message-when-data">2011</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qa-message-content">
										Pada awalnya Desa Ompu Raja Hatulian ini tidak merupakan satu desa yang berdiri sendiri, melainkan
										satu desa dengan Desa Lumban Binanga. Tetapi pada Tahun 2011 Desa ini mekar dan menjadi desa yang terpisa dari Lumban Binanga.
                                    </div>
                                </div>
                            </div>

                            <div class="message-item fade-up" id="m9">
                                <div class="message-inner">
                                    <div class="message-head clearfix">
                                        <div class="user-detail">
                                            <h5 class="handle">Pembangunan Pertama</h5>
                                            <div class="post-meta">
                                                <div class="asker-meta">
                                                    <span class="qa-message-what"></span>
                                                    <span class="qa-message-when">
                                                        <span class="qa-message-when-data">Oktober-Desember 2019</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qa-message-content">
										Pantai hatulian dibangun oleh langsung oleh kementrian indonesia, dengan anggara sekitar 2,3 Milyar Rupiah.
										Pembangunan pantai ini direncanakan akan berlangsung 2 tahap, yaitu tahap yang pertama dilakukan Oktober-Desember 2019, dan telah rampung.
                                    </div>
                                </div>
                            </div>

                            <div class="message-item fade-up" id="m7">
                                <div class="message-inner">
                                    <div class="message-head clearfix">
                                        <div class="user-detail">
                                            <h5 class="handle">Pembangunan kedua</h5>
                                            <div class="post-meta">
                                                <div class="asker-meta">
                                                    <span class="qa-message-what"></span>
                                                    <span class="qa-message-when">
                                                        <span class="qa-message-when-data">Maret-Desember 2020</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="qa-message-content">
                                        Tahap kedua direncanakan dimulai pada bulan
                        				maret 2020 dan pembangunan direncanakan diselesaikan pada tahun 2020 ini.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section id="services" class="divider-wrapper">
			<div class="container">
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title" id="kelebihan">Kelebihan Pantai</h2>
	                <hr>
	                <p>Dari beberapa pendapat pengunjung, kelebihan pantai hatulian adalah</p>
	            </div>
				<div class="row">
					<div class="col-lg-1 col-md-1 col-sm-1 centered bounce-in">
						<span class="pe-7s-chat icon"></span>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 fade-up">
						<h2>Ketentraman</h2>
						<p>
							Pantai ini membawa ketentraman tersendiri kepada pengunjungnya, karena jauh dari keramain kota dan polusi kendaraan.
						</p>
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 centered bounce-in">

					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 fade-up">
						<h2>Kesejukan</h2>
						<p>
							Selain tentram, pantai Hatulian sangat sejuk karena disekitaran pantai banyak pohon yang masih berdiri teguh dan membawa kesejukan.
						</p>
					</div>

					<div class="col-lg-1 col-md-1 col-sm-1 centered bounce-in">

					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 fade-up">
						<h2>Pantai Yang luas</h2>
						<p>
                            Pantai yang luas yang dapat menghilangkan kebosanan ketika kita mengunjungi pantai ini karena yang dilihat tidak hanya itu-itu saja.
                        </p>
					</div>
				</div>
			</div><!-- container -->
        </section>

        <section id="portfolio" class="white">
			<div class="container">
	    	<div class="gap"></div>
	        	<div class="centered gap fade-down section-heading">
	                <h2 class="main-title" id="gambar">Gambar Pantai Hatulian</h2>
	                <hr>
	                <p>Beberapa gambar yang diambil yang menunjukkan kelebihan Pantai Hatulian</p>
	            </div>
	            <ul class="portfolio-filter fade-down centered">
	                <li><a class="btn btn-outlined btn-primary active" href="#" data-filter="*">Semua</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".tentram">Tentram</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".sejuk">Sejuk</a></li>
	                <li><a class="btn btn-outlined btn-primary" href="#" data-filter=".damai">Damai</a></li>
	            </ul><!--/#portfolio-filter-->

	            <ul class="portfolio-items col-3 isotope fade-up gap">
	                <li class="portfolio-item tentram isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/5.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/5.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla tentram isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/3.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/3.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item bootstrap tentram isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/2.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/2.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                             >
	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla design sejuk isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/6.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/6.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla sejuk isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/1.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/1.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item wordpress sejuk isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/15.jpeg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/15.jpeg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>
	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla design damai isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/12.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/12.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item joomla damai isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/8.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/8.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	                <li class="portfolio-item wordpress damai isotope-item">
	                    <div class="item-inner">
	                        <img src="{{url('assets/gambar/13.jpg')}}" alt="">
	                        <div class="overlay">
	                            <a class="preview btn btn-outlined btn-primary" href="{{url('assets/gambar/13.jpg')}}" data-rel="prettyPhoto"><i class="fa fa-eye"></i></a>

	                        </div>
	                    </div>
	                </li><!--/.portfolio-item-->
	            </ul>
	        </div>
	    </section>
        <section id="testimonials" class="divider-wrapper">
			<div class="container">
		    	<div class="gap"></div>
	            <div class="col-md-8 col-md-offset-2 gap">
	            	<div id="testimonial-carousel">
                        <h1 style="text-align: center" id="testimonial">Testimonial</h1>
	            		<div class="testimonial">
							<div class="media centered fade-down">
					           <a href="#" class="animated rotateIn">
					                <img src="{{url('assets/gambar/kevin.jpg')}}" width="150px" height="200px" class="" />
					           </a>
					           <div class="media-body bounce-in">
					               <h3>Kevin Yoyada</h3>
					               <em>Mahasiswa</em>
					           </div>
					       </div>
					       <div class="bubble bounce-in">
                            "Pantai ini merupakan salah satu pantai terbaik di wilayah TOBA, walaupun masih dalam tahap pembangunan, sepertinya kedepannya progres pembangunannya akan baik"
					       </div>
				       	</div>
	            		<div class="testimonial">
							<div class="media centered fade-down">
					           <a href="#" class="animated rotateIn">
					                <img src="{{url('assets/gambar/meyliza.png')}}" width="150px" style="margin-top: 30px;" class="" alt="Avatar"/>
					           </a>
					           <div class="media-body bounce-in">
					               <h3>Meyliza Siregar</h3>
					               <em>Mahasiswa</em>
					           </div>
					       </div>
					       <div class="bubble bounce-in">
					          	"Tempat yang bagus untuk tempat refreshing di waktu luang. Selain Tempatnya sejuk, sekitar pantai juga membawa dampak ketenangan karena jauh dari perkotaan."
					       </div>
				       </div>
			       </div>
		       </div>
			</div><!-- container -->
        </section>




        		<!-- CLIENTS LOGOS -->
		<div class="grey">
			<div class="container">

				<div class="row">
		        	<div class="centered gap fade-down section-heading">
		                <h2 class="main-title" id="lokasi">Lokasi</h2>
		                <hr>
		                <p>
                            Kunjungi lokasi Pantai Hatulian Dengan click gambar dibawah.
                        </p>
		            </div>
				</div><!-- row -->

				<div class="row centered">
					<div id="logo-carousel" class="fade-up">
						<div class="item">
                            <a href="https://www.google.com/maps/place/Hatulian+Beach/@2.3780936,99.1142614,719m/data=!3m1!1e3!4m5!3m4!1s0x302e01d37c415a47:0x8f5ee4f8c2311853!8m2!3d2.3783551!4d99.1161347">
							    <img src="{{url('assets/gambar/lokasi2.png')}}" alt="">
                            </a>
						</div>
						<div class="item">
							<a href="https://www.google.com/maps/place/Hatulian+Beach/@2.3780936,99.1142614,719m/data=!3m1!1e3!4m5!3m4!1s0x302e01d37c415a47:0x8f5ee4f8c2311853!8m2!3d2.3783551!4d99.1161347">
							    <img src="{{url('assets/gambar/lokasi1.png')}}" alt="">
                            </a>
						</div>
					</div>
				</div><!-- row -->
			</div><!-- container -->
        </div><!-- dg -->


		<div id="call">
			<div class="container">
				<div class="row fade-up">
					<h3>Info Penting!</h3>
					<div class="col-lg-8 col-lg-offset-2">
						<p>
                            Sekedar untuk mengingatkan kepada calon pengunjung, bahwasanya untuk menuju pantai sejauh ini tidak disediakan Angkutan Umum.
                            Pengunjung disarankan untuk membawa kendaraan pribadi untuk menuju pantai, Apabila tidak pengunjung harus berjalan kaki dengan jarak tempuh sekitar 20-30 Menit.
                        </p>
					</div>
				</div><!-- row -->
			</div><!-- container -->
        </div>


        <div id="mapwrapper" class="gap">
			<div id="map" class="fade-up"></div>
        </div>

        <div class="container" id="contact-us">
            <h2 id="pesan">Pesan</h2>
			<div class="row gap">
				<div class="fade-up col-md-6 fade-up">
					<p>
                        kami sangat berterima kasih kepada pengunjung yang menyediakan waktunya untuk berkunjung ke website kami ini. Kami juga sangat berterima kasih
                        apabila pengunjung dapat meninggalkan sedikit pesan mengenai website ini. Harapan kami semoga pengujung dapat puas dengan informasi yang kami berikan dan tertarik untuk mengunjungi Pantai hatulian, Salam. Horas...Horas...Horas
                    </p>
				</div>
				<div class="fade-up col-md-6 fade-up">
					<div id="message"></div>
					<form method="post" action="sendemail.php" id="contactform">
						<p><input type="text" class="form-control" name="name" id="name" placeholder="Name" /></p>
						<p><input type="text" class="form-control" name="email" id="email" placeholder="Email" /></p>
						<p><input type="text" class="form-control" name="website" id="website" placeholder="Website" /></p>
						<p><textarea name="comments" class="form-control" id="comments" placeholder="Comments"></textarea></p>
						<input class="btn btn-outlined btn-primary" type="submit" name="submit" value="Submit" />
					</form>
				</div>
			</div><!-- row -->
		</div>
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
