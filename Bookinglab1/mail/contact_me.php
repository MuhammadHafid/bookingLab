<?php
// Check for empty fields
if(empty($_POST['nama']) ||
  empty($_POST['kelas']) ||
  empty($_POST['jam']) ||
  empty($_POST['alasan']) ||
  !filter_var($_POST['jam'], FILTER_VALIDATE_JAM)) {
  http_response_code(500);
  exit();
}

$nama = strip_tags(htmlspecialchars($_POST['nama']));
$kelas = strip_tags(htmlspecialchars($_POST['kelas']));
$jam = strip_tags(htmlspecialchars($_POST['jam']));
$alasan = strip_tags(htmlspecialchars($_POST['alasan']));

// Create the email and send the message
$to = "achmad_syeh_27rpl@student.smktelkom-mlg.sch.id"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Form Pesan Lab:  $nama";
$body = "Anda telah menerima pesan terkait peminjaman Lab.\n\n"."Rincian sebagai berikut\n\nNama: $nama\n\nJam pemakaian: $jam\n\nKelas: $kelas\n\nAlasan:\n$alasan";
$header = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";

if(!mail($to, $subject, $body, $header))
  http_response_code(500);
?>
