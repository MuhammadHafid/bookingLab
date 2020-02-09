<?php
include 'serverlab.php';
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
            <link href="css/freelancer.min.css" rel="stylesheet">
                <link href="css/freelancer.css" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Formulir Pemesanan Lab</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <form name="book" id="contactForm" novalidate="novalidate" method="post">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Nama</label>
                  <span><h4>Nama</h4></span>
                  <div class="form-group floating-label-form-group controls mb-0 pb-2"><?php echo $_SESSION['fullname'] ?></div>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <span><h4>Kelas</span></h4>
                  <select class="form-control" id="kelas" name="kelas" required="required" data-validation-required-message="Silahkan masukan kelas anda.">
                    <option></option>
                    <option>X R1</option>
                    <option>X R2</option>
                    <option>X R3</option>
                    <option>X R4</option>
                    <option>X R5</option>
                    <option>X R6</option>
                    <option>X R7</option>
                    <option>X T1</option>
                    <option>X T2</option>
                    <option>X T3</option>
                    <option>X T4</option>
                    <option>X T5</option>
                    <option>X T6</option>
                  </select>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <br>
                  <span><h4>Jam</h4></span>
                  <input class="form-control" id="jam" name="jam" type="time" required="required" data-validation-required-message="Silahkan masukan jam penggunaan anda.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>Alasan</label>
                  <span><h4>Alasan</h4></span>
                  <textarea class="form-control" id="alasan" name="alasan" type="text" rows="5" required="required" data-validation-required-message="Alasan pemesanan."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <button name="book" type="submit" action="lab1.php" href="headerselamat/headinglab1.html">pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
    <script src="js/freelancer.min.js"></script>
  </body>
</html>
