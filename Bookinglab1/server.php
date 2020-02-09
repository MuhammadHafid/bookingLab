<?php
	session_start();

	// variable declaration
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'bookinglab');

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password = mysqli_real_escape_string($db, $_POST['pass']);

		if (empty($email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$query = "SELECT * FROM users WHERE `password_1` = '$password' AND `email` = '$email'";
			$results = mysqli_query($db, $query);
// 			$results2 = mysqli_query($db, "SELECT * FROM `users` WHERE `email` = '$email'");

			while($row=mysqli_fetch_array($results)){
			$_SESSION['username'] = $row['username'];
			$_SESSION['fullname'] = $row['fullname'];
			}

			if (mysqli_num_rows($results)) {

				$_SESSION['success'] = "You are now logged in";
				header('location: index.php');
			} else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

?>
