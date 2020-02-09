<?php
	session_start();

	// variable declaration
	$email    = "";
	$errors = array();
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'bookinglab');

	// LOGIN USER
	if (isset($_POST['book'])) {
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $kelas = mysqli_real_escape_string($db, $_POST['kelas']);
		$jam = mysqli_real_escape_string($db, $_POST['jam']);
		$alasan = mysqli_real_escape_string($db, $_POST['alasan']);

		if (empty($nama)) {
			array_push($errors, "Nama anda diperlukan");
		}
		if (empty($kelas)) {
			array_push($errors, "Kelas anda diperlukan");
		}
    if (empty($jam)) {
			array_push($errors, "Jam peminjaman diperlukan");
		}
		if (empty($alasan)) {
			array_push($errors, "Alasan peminjaman diperlukan");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO booking (id_booking, id_users, id_lab, keperluan, tgl_pemakaian, waktu_booking, status) VALUES (NULL, '$nama', '$lab', '$alasan', '$tgl', '$jam', '');";
			$results = mysqli_query($db, $query);
			$results2 = mysqli_query($db, "SELECT * FROM users WHERE fullname='$nama'");

			while($row=mysqli_fetch_array($results2)){
			$_SESSION['nama'] = $row['nama'];
			}

			if (mysqli_num_rows($results) == 0) {


				$_SESSION['success'] = "Terima kasih!";
				header('location: headerlab1.html');
			}else {
				array_push($errors, "Nama anda invalid");
			}
		}
	}

?>
