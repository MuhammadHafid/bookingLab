<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Booking Lab</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="img/unnamed.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
<?php include('errors.php'); ?>

		<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="login.php" name="login_user">
					<span class="login100-form-title p-b-34">
						Account Login<br>
						<b>Administrators Only</b>
					</span>

					<div class="wrap-input100 rs1-wrap-input100 validate-input m-b-20" data-validate="Type Your Email">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
					</div>
					<div class="wrap-input100 rs2-wrap-input100 validate-input m-b-20" data-validate="Type password">
						<input class="input100" type="password" name="pass" placeholder="Password" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login_user">
							Login
						</button>
					</div>

					<div class="w-full text-center p-t-27 p-b-239">
						<span class="txt1">
						</span>

					<a href="#" class="txt2">
					</a>
				</div>

			</form>

					<div class="login100-more" style="background-image: url('images/bg02.jpg');"></div>
				</div>
			</div>
		</div>

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

				<a href="#">Home</a>
				·
				<a href="#">Website</a>
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
</body>
</html>
