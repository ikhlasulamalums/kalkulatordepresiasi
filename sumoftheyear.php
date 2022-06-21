<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kalkulator Depresiasi</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Avilon - v4.6.1
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= More Features Section ======= -->
    <section id="more-features" class="section-bg">
      <div class="container" data-aos="fade-up">


        <div class="row gy-4">

          <div class="col-lg-6">
          <div class="box">
          <h4 class="title">Sum of the Year</h4><hr>
          <form>
          <table style="width: 500px">
          <tr>
          <td><strong>BIAYA PEROLEHAN ASET (Rp)</strong></td>
        	<td><input type="number" name="aset" placeholder="contoh: 10000" value="<?php echo @$_GET['aset'] ?>"></td>
        	</tr>
        	<tr>
            <td><strong>NILAI RESIDU (Rp)</strong></td>
			    <td><input type="number" name="residu" placeholder="contoh: 1000" value="<?php echo @$_GET['residu'] ?>"></td>
			</tr>
			<td><strong>MASA MANFAAT ASET (Tahun)</strong></td>
			<td><input type="number" name="masa" placeholder="contoh: 5" value="<?php echo @$_GET['masa'] ?>"></td>
			</tr>
		<tr><td>
        <div style="margin-top: 1rem">
            <button type="button"><a href="sumoftheyear.php">Clear</a></button>
            <button type="submit">Hitung</button>
        </div></td></tr>
    </table>
    </form>
    
            </div>
          </div>

          <div class="col-lg-6">
            <div class="box">
              <h4 class="title">Hasil</a></h4>
              	<?php
			if ($_GET):
    		$a = (double) @$_GET['aset'];
    		$b = (double) @$_GET['residu'];
    		$c = (double) @$_GET['masa'];
        $da = $a - $b;
        $soydigits = 0;
        for ($i = $c; $i >= 1; $i--) {
          $soydigits = $soydigits + $i;
        }
        echo "Jumlah Angka Tahun = {$soydigits}<br>" ;
        echo "Jumlah Tersusutkan = Rp.{$da}<br>" ;
        echo "Penyusutan Nilai Beban (Secara berurutan dari atas ke bawah untuk ";
        $de = 0;
        echo "";
        for ($j = 1; $j <= $c; $j++) {
          echo "Tahun ke-{$j}; ";
        }
        echo ") =";
        echo "<br>";
        for ($i = $c; $i >= 1; $i--) {
          $de = $i / $soydigits * $da;
          echo "Rp.{$de}";
          echo "<br>";
        }
        

      endif; ?>
            </div>
          </div>

          
	  			


        </div>
      </div>
    </section><!-- End More Features Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 text-lg-start text-center">
          <div class="copyright">
            &copy; Copyright <strong>Avilon</strong>. All Rights Reserved
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
          -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
        <div class="col-lg-2 text-lg-center text-center">
          <button type="button"><a href="index.php">Kembali ke Beranda</a></button>
        </div>
        <div class="col-lg-5 text-lg-end text-center">          
          <p><b><a href="profil.php">Profil Kami</a></b></p>
        </div>

      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>