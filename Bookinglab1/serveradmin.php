<?php
	session_start();

	// variable declaration
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'bookinglab');


	// LOGIN USER
	if (isset($_POST['login_admin'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE `password_admin` = '$password' AND `email` = '$email'";
			$results = mysqli_query($db, $query);

			while($row=mysqli_fetch_array($results)){
			$_SESSION['username'] = $row['username'];
			}

			if (mysqli_num_rows($results)) {

				$_SESSION['success'] = "You are now logged in";
				header('location: admin_dashboard.php');
			} else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
