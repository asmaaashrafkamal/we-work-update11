<?php
require_once ('functions.php');
$get_all_client=new get();
$get_all_client=$get_all_client->get_all_client();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Clients </title>
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
  <link href="assets/css/cl.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">



</head>

<body>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top ">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light">
          <a href="index.html"><img src="./assets/images/wework-01.png"></a></h1>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li ><a href="index.php">Home</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li class="active"><a href="#">Clients</a></li>
          <li><a href="about.php">Join Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
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
<style>
  #front-2 {
 background-image: 
 url("../images/clients/c4.png")
}
#back-2 {
 background-image: 
 url("../images/clients/c4.png")
}
</style>
    </div>
  </header><!-- End Header -->
  
  <main id="main">

    <!-- ======= Our Services Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Our Clients </h2>
          <ol>
            <li><a href="index.">Home</a></li>
            <li> Clients</li>
          </ol>
        </div>

      </div>
    </section>  <br>
    <!-- End Our Services Section -->

<!--  Our Clients Section -->

    <div class="grids">
    <?php
         if($get_all_client !=null){
         foreach($get_all_client as $r){
           echo'
        <div class="card-one">
        <div class="card">
           <div class="card__side card__side--front" style="background-image:url(../dashboard/'.$r['position'].');"  id="front-1">";
            </div>
           
            </div>
        </div>';}}else{
          echo "<h1>Soon</h1>";
        }
    ?>
        </div>
<br>

  </main>
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