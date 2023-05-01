<?php
require '../conn.php';
if(isset($_POST['submit'])){
$qry = "insert into driverRegister values(null, '".$_POST['nameD']."', '".$_POST['phoneD']."','".$_POST['cnicNoD']."','".$_POST['picD']."'
, '".$_POST['cnicD']."','".$_POST['selectD']."' );";
if($con->query($qry)===true)
{
$save = "success";
echo "success";
echo "<script>alert('Thankyou..! Will Get In Tounch Soon.')</script>";
}
else
{
    $save = "warning";
    echo "Failed";
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Go & Save - Driver Register</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

   <!-- Favicons -->
  <link href="logo.png" rel="icon">
  <link href="logo.png" rel="apple-touch-icon">
  
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
      <h1><a href="https://goandsave.getsolutry.com/"><img src="../logo.png" alt="logo" style="width:50px; height:50px;">&nbsp;Go & Save</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
      <ul>
          <li><a class="active " href="https://goandsave.getsolutry.com/">Home</a></li>
            <li><a href="https://goandsave.getsolutry.com/about.html">About Us</a></li>
            <li><a href="https://goandsave.getsolutry.com/org/orgForm.php">Join Us</a></li>
            <li><a href="https://goandsave.getsolutry.com/org/driverRegister.php">Driver Register</a></li>
            <li><a href="https://goandsave.getsolutry.com/contact.php">Contact Us</a></li>
            <li><a href="https://firebasestorage.googleapis.com/v0/b/gosave-50d38.appspot.com/o/apk%20file%2Fapp-release.apk?alt=media&token=254d07cb-3b40-4078-b98d-0cb0765baae5">Download</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">
    <section class="hero-section inner-page">
      <div class="wave">

        <svg width="1920px" height="265px" viewBox="0 0 1920 265" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
          <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
              <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,667 L1017.15166,667 L0,667 L0,439.134243 Z" id="Path"></path>
            </g>
          </g>
        </svg>
      </div>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-12">
            <div class="row justify-content-center">
              <div class="col-md-7 text-center hero-text">
                <h1 data-aos="fade-up" data-aos-delay="">Driver's Registeration</h1>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>


	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
						</div>
						<form method="POST">	
							<div class="form-group">
								<span class="form-label">Your Name</span>
								<input class="form-control" type="text" placeholder="Enter your name" name="nameD" required>
							</div>
							<div class="form-group">
								<span class="form-label">Phone</span>
								<input class="form-control" max="11"  type="tel" pattern="^\d{4}-\d{7}$" placeholder="03XX-XXXXXXX" name="phoneD" required>
							</div>
							<div class="form-group">
								<span class="form-label">Your Cnic number </span>
								<input class="form-control" max="13" type="tel"pattern="^\d{5}-\d{8}-\d{1}$" placeholder="XXXXX-XXXXXXX-X" name="cnicNoD" required>
							</div>
							
							<div class="form-group">
								<span class="form-label">Orgnaization</span>
								<select class="form-control" name="selectD" required>
									<option>Select the orgnaization</option>
									<option>Ehdi</option>
									<option>Chippa</option>
									<option>Amaan</option>
								</select>
							</div>
							<div class="form-btn">
								<button class="submit-btn btn btn-primary" name="submit">Registered</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</body>

  </main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>About Go and Save</h3>
          <p>With Go & Save APP , You may quickly connect to the nearby ambulance and trace driver's location and expected arrival 
            time also shared via the APP. The APP also determines the most convenient path that is hassle and traffic free. You can 
            also donate to ambulance services with this app.</p>
          <p class="social">
            <a href="#"><span class="bi bi-facebook"></span></a>
            <a href="#"><span class="bi bi-instagram"></span></a>
          </p>
        </div>
        <div class="col-md-7 ms-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Navigation</h3>
              <ul class="list-unstyled">
                <li><a href="https://goandsave.getsolutry.com/about.html">About Us</a></li>
                <li><a href="https://goandsave.getsolutry.com/org/orgForm.php">Join Us</a></li>
                <li><a href="https://goandsave.getsolutry.com/org/driverRegister.php">Driver Register</a></li>
                <li><a href="https://goandsave.getsolutry.com/contact.php">Contact Us</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Services</h3>
              <ul class="list-unstyled">
                <li><a href="#">E-Booking</a></li>
                <li><a href="#">Donation</a></li>
                <li><a href="#">Call in Hospital</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Downloads</h3>
              <ul class="list-unstyled">
                <li><a href="https://firebasestorage.googleapis.com/v0/b/gosave-50d38.appspot.com/o/apk%20file%2Fapp-release.apk?alt=media&token=254d07cb-3b40-4078-b98d-0cb0765baae5">Get from the App Store</a></li>
                <li><a href="https://firebasestorage.googleapis.com/v0/b/gosave-50d38.appspot.com/o/apk%20file%2Fapp-release.apk?alt=media&token=254d07cb-3b40-4078-b98d-0cb0765baae5">Get from the Play Store</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="footerlower" style="background-color: #FFFFFF; color: black; padding: 5px;">
      <div class="row justify-content-center text-center" >
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Go & Save. All Rights Reserved</p>
        </div>
      </div>
   </div>
<!-- ======= Footer End ======= -->
<!-- ======= Footer End ======= -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../assets/vendor/aos/aos.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assets/js/main.js"></script>

</body>

</html>

