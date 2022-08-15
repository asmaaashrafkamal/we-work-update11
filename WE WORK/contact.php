<?php
if(isset($_POST['contact'])){
  require_once ('functions.php');
$contact=new get();
$m=$contact->contact($_POST['name'],$_POST['email'],$_POST['subject'],$_POST['messages']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link rel="icon" href="./assets/images/iwork.png"/>
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
      <div class="container">
  
        <div class="logo float-left">
          <h1 class="text-light">
            <a href="index.php"><img src="./assets/images/wework-01.png"></a></h1>
        </div>
  
        <nav class="nav-menu float-right d-none d-lg-block">
          <ul>
            <li ><a href="index.php">Home</a></li>
          
            <li><a href="team.php">Team</a></li>
            <li><a href="portfolio.php">Portfolio</a></li>
            <li><a href="clients.php">Clients</a></li>
            <li><a href="about.php">Join Us</a></li>
            <li class="active"><a href="#">Contact Us</a></li>
            <li class="drop-down"><a href="">Services</a>
              <ul>
                <li><a href="programming.html">Software Engineering</a></li>
                <li class="drop-down"><a href="#">Decoration Department</a>
                  <ul>
                    <li><a href="interior_design.html">Interior Design</a></li>
                    <li><a href="exterior_design.html">Exterior Design</a></li>               
                  </ul>
                </li>
                <li><a href="graphic_design.html">Graphic Design</a></li>
                <li><a href="Marketing.html">Marketing</a></li>
                <li><a href="business.html">Business Development</a></li>
              </ul>
            </li>
              </ul>
        </nav><!-- .nav-menu -->
  
      </div>
    </header><!-- End Header -->

  <main id="main">

    <!-- ======= Contact Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Contact</li>
          </ol>
        </div>

      </div>
    </section><!-- End Contact Section -->


  <!-- ======= Contact Section ======= -->
  <section class="contact" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="row">

        <div class="col-lg-6">

<div class="row">
  <div class="col-md-12">
    <div class="info-box">
      <i class="bx bx-map"></i>
      <h3>Our Address</h3>
      <p> Jeddah , Saudi Arabia</p>
    </div>
  </div>
  <div class="col-md-6">
    <div class="info-box">
      <i class="bx bx-envelope"></i>
      <h3>Email Us</h3>
      <a href="mailto:info@we-work.pro " style="color: black;">info@we-work.pro</a>
    </div>
  </div>
  <div class="col-md-6">
    <div class="info-box">
      <i class="bx bx-phone-call"></i>
      <h3>Call Us</h3>
      <a href="tel:+966 50 352 2883" style="color: black;">+966 50 352 2883</a>
      </div>
  </div>
</div>

</div>

          <div class="col-lg-6">
          <?php
              if(!empty($m)){
                if($m=="fail"){
                  echo '<div style="padding-left:15%;padding-right:10%;"><div class="alert alert-danger"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">Error Occurred Please Try Again</h3> </div></div>';
                  }elseif($m=="success"){
                    echo '<div style="padding-left:15%;padding-right:10%;"><div class="alert alert-success"  style="max-width: 600px;"  role="alert"><h3 style="text-align:center;">Successfully Sent</h3> </div></div>';
                 }
                }
                ?>
            <form  method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="messages" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
               
              </div>
              <div class="text-center"><button type="submit" name="contact">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- End Contact Section -->
        <!-- ======= Map Section ======= -->
        <section class="map mt-2">
            <div class="container-fluid p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475324.74304765253!2d38.93027102292695!3d21.449888621954102!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15c3d01fb1137e59%3A0xe059579737b118db!2sJeddah%20Saudi%20Arabia!5e0!3m2!1sen!2seg!4v1625261827961!5m2!1sen!2seg"
                    frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </section>
        <!-- End Map Section -->

    </main>
    <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">

 
<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="about.php">Join Us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="clients.php">Clients</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="team.php">Team</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="contact.php">Contact Us</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a href="programming.html">Software Engineering</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Decoration</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="Marketing.html">Marketing</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="graphic_design.html">Graphic Design</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="business.html">Business Development</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-contact">
        <h4>Contact Us</h4>
        <p>
          Jeddah <br> 
          Saudi Arabia <br><br>
          <strong>Phone:</strong> <a href="tel:+966 50 352 2883" class="newz"> +966 50 352 2883</a><br>
          <strong>Email:</strong><a href="mailto:info@we-work.pro " class="newz"> info@we-work.pro </a> <br>
        </p>

      </div>

      <div class="col-lg-3 col-md-6 footer-info">
        <h4>About Us</h4>
        <p>
          We work is a Saudi institution
          Created in 2019.
          <br> 
            Aiming to provide a premium experience to our customers, it will satisfy our customers' desires ,
            <br>
          In line with Vision 2030,
          <br> 
          Everything you need in one place with high quality.
                    </p>
        <div class="social-links mt-3">
          <a href="https://twitter.com/wework52158970" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/institutionwework2019/"  target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://www.youtube.com/channel/UC7w-8XMWD8X-IwbMASBVeDw" target="_blank" class="youtube"><i class="bx bxl-youtube"></i></a>
          <a href="https://www.linkedin.com/in/we-work-group-a47518205/" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="container">
  <div class="copyright">
    <p>The site is authenticated by Marouf platform of the Saudi Ministry of Commerce</p>
    <a href="https://maroof.sa/209472" target="_blank">
      <img src="./assets/images/m.png" width="100">
    </a> <br> <br>
    <p>Commercial Registration No. <strong style="color: #C3A743;">4030383581</strong> </p>
  </div>
  <div class="copyright"> 
    &copy; 2019 <strong><span>We-work</span></strong>. All Rights Reserved
  </div>
</div>
</footer>
<!-- End Footer -->

<a href="https://chatwith.io/s/we-work-group-1" target="_blank" class="back-to-top"><i class="icofont-whatsapp"></i></a>





<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<!-- <script src="assets/vendor/php-email-form/validate.js"></script> -->
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>