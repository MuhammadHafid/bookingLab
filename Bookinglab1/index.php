<?php
	session_start();

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="img/unnamed.ico"/>
    <title>Home - Booking Lab</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <!-- Custom styles for this template -->
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a href="https://www.smktelkom-mlg.sch.id">
          <img src="https://www.smktelkom-mlg.sch.id/assets/front/img/logo_putih.png" alt="Logo telkom" width="160" height="40" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Alur</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Daftar Lab</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="loginadmin.php">Admin</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php?logout='1'">LOGOUT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Booking Lab Site!</div>
          <div class="intro-heading text-uppercase"><?php echo $_SESSION['username'] ?></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Start Book</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">ALUR PEMINJAMAN </h2>
            <h3 class="section-subheading text-muted">Di saat pemesanan lab, pastikan labnya benar dan tujuan jelas.</h3>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <a class="fas fa-shopping-cart fa-stack-1x fa-inverse js-scroll-trigger" href="#portfolio"></a>
            </span>
            <h4 class="service-heading">Pilih Lab</h4>
            <p class="text-muted">Pemilihan Lab yang akan dipesan.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading"> Peminjaman Lab </h4>
            <p class="text-muted">Data peminjam, Jam peminjaman, dan keperluan penggunaan Lab.</p>
          </div>
          <div class="col-md-4">
            <span class="fa-stack fa-4x">
              <i class="fas fa-circle fa-stack-2x text-primary"></i>
              <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
            </span>
            <h4 class="service-heading">Verifikasi</h4>
            <p class="text-muted">Verifikasi Pemesanan Lab.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Daftar Lab</h2>
            <h3 class="section-subheading text-muted">Silahkan pilih Lab.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 1</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 2</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 3</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 4</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 5</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/bg02.jpg" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Laboratorium Komputer 6</h4>
              <p class="text-muted">Status: -</p>
            </div>
          </div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="img/bg02.jpg" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Laboratorium Komputer 7</h4>
							<p class="text-muted">Status: -</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
							<div class="portfolio-hover">
								<div class="portfolio-hover-content">
									<i class="fas fa-plus fa-3x"></i>
								</div>
							</div>
							<img class="img-fluid" src="img/bg02.jpg" alt="">
						</a>
						<div class="portfolio-caption">
							<h4>Laboratorium Komputer 8</h4>
							<p class="text-muted">Status: -</p>
						</div>
					</div>
        </div>
      </div>
    </section>




    <!-- Clients -->
    <section class="py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6">
            <a href="https://www.telkom.co.id/">
              <img class="img-fluid d-block mx-auto" src="https://ppdb.smktelkom-mlg.sch.id/f_images/logo-telkom/logo-telkom.png" alt="telkom Indonesia" width="100" height="50">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://ypt.or.id/">
              <img class="img-fluid d-block mx-auto" src="https://ppdb.smktelkom-mlg.sch.id/f_images/yayasan/yayasanpendidikantelkom.png" alt="yayasanpendidikantelkom" width="100" height="50">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://www.oracle.com/index.html">
              <img class="img-fluid d-block mx-auto" src="https://www.smktelkom-mlg.sch.id/assets/front/img/oracle.gif" alt="oracle" width="100" height="50">
            </a>
          </div>
          <div class="col-md-3 col-sm-6">
            <a href="https://www.telkomakses.co.id/">
              <img class="img-fluid d-block mx-auto" src="https://www.smktelkom-mlg.sch.id/assets/front/img/ta.png" alt="ta" width="100" height="50">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Kontak Kami</h2>
            <h3 class="section-subheading text-muted">Kami ingin berkomunikasi dengan anda, silahkan isi form dibawah untuk menghubungi kami!</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Nama anda *" required="required" data-validation-required-message="Silahkan masukan nama anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Email anda *" required="required" data-validation-required-message="Silahkan masukan email anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="No. Telepon anda *" required="required" data-validation-required-message="Silahkan masukan no. telepon anda.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Pesan anda *" required="required" data-validation-required-message="Silahkan masukan pesan anda."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit" name="contact">Kirim</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
      <link rel="stylesheet" type="text/css" href="css/demo.css">
      <link rel="stylesheet" type="text/css" href="css/footer.css">
      <div class="footer-left">

        <img src="https://www.smktelkom-mlg.sch.id/assets/front/img/logo-moklet.png" alt="" class="logo">

        <p class="footer-company-about">
          <br><br>
        <small></small>
          Pelopor SMK bidang Teknologi dan Informatika di Indonesia.<br>Berpengalaman dari tahun 1992 yang telah terakreditasi "A"<br>dan mempunyai standart mutu ISO 9001:2008.
        </p><br><br>
        <small></small>

        <p class="footer-company-name">SMK TELKOM MALANG &copy; 2018</p>
      </div>

      <div class="footer-center">

        <div>
          <a href="https://goo.gl/maps/KGkHAA4QvRH2">
          <i class="fa fa-map-marker"></i></a>
          <p><span>Jl. Danau Ranau </span> Sawojajar, Malang</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>0341-712500</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:info@smktelkom-mlg.sch.id">info@smktelkom-mlg.sch.id</a></p>
        </div>

      </div>

      <div class="footer-right">


        <p class="footer-links">
          <span>More : </span>

          <a href="index.php">Home</a>
          ·
          <a href="https://www.smktelkom-mlg.sch.id">Website</a>
          ·
          <a href="#">About</a>
          ·
          <a href="#">Contact</a>
        </p>



        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-google-plus"></i></a>

        </div>

      </div>

    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Laboratorium Komputer 1</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab1.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 2</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab2.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 3</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab3.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 4</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab4.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 5</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab5.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 6</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab6.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

		<!-- Modal 7 -->
		<div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl"></div>
						</div>
					</div>
					<div class="container">
						<div class="row">
							<div class="col-lg-8 mx-auto">
								<div class="modal-body">
									<!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 7</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab7.php">
		<input type="submit" value="Pesan!" />
</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
									<h2 class="text-uppercase">Laboratorium Komputer 8</h2>
                  <p class="item-intro text-muted">Laboratorium Komputer Macintosh.</p>
                  <img class="img-fluid d-block mx-auto" src="https://mesajournalnews.com/wp-content/uploads/2017/03/thumbnail_maclab-libraryhpbanner.jpg" alt="">
                  <p>Laboratorium ini memiliki 40 unit komputer berjenis Macintosh, dan 40 meja serta kursi.
									Juga dilengkapi dengan komputer pusat Laboratorium, proyektor, dan lainnya.</p>
                  <ul class="list-inline">
                    <li>Date: January 2018</li>
                    <li>Client: Macintosh</li>
                    <li>Category: Computer Lab</li>
                  </ul>
									<form action="labpesanfl/lab8.php">
    <input type="submit" value="Pesan!" />
</form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
