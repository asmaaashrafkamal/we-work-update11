<?php
require_once ('functions.php');
$get_all_client=new get();
$get_all_client=$get_all_client->get_all_client();
$get_category_prog=new get();
$prog=$get_category_prog->get_category();
$get_home_cat=new get();
$home_cat=$get_home_cat->home_category();
$get_home_header=new get();
$home_header=$get_home_header->home_header();
$home_whyus1=new get();
$home_whyus=$home_whyus1->home_whyus();
$whyuspoints1=new get();
$whyuspoints=$whyuspoints1->whyuspoints();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title> We Work Group </title>
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
  <header id="header" class="fixed-top header-transparent">
    <div class="container">

      <div class="logo float-left">
       <a href="index.php"><img src="./assets/images/wework-01.png"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="portfolio.php">Portfolio</a></li>
          <li><a href="clients.php">Clients</a></li>
          <li><a href="about.php">Join Us</a></li>
          <li><a href="contact.php">Contact Us</a></li>
          <li class="drop-down"><a href="">Services</a>
            <ul>
              <li><a href="programming.html">Software Engineering</a></li>
              <li class="drop-down"><a href="#">Decoration </a>
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

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"> <span> We Work  </span></h2>
          <h3 class="animate__animated animate__fadeInUp">We Are Creative </h3>
          <a href="#why" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item ">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInUp"> Develop a Passion For Learning </h2>
          <a href="#why" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
        </div>
      </div>

          <!-- Slide 3 -->
          <div class="carousel-item">
            <div class="carousel-container">
              <h2 class="animate__animated animate__fadeInDown">If You Do, </h2>
              <h3 class="animate__animated animate__fadeInUp">You Will Never Cease To Grow </h3>
              <a href="#why" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
          </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>
  </section><!-- End Hero -->


  <main id="main">

    <!-- ======= work Section ======= -->
    <section class="services">
      <div class="container">

        <div class="row">
          <?php 
     if($home_cat !=null){
          foreach($home_cat as $h){
            if($h['cat']=='Software Engineering'){
         echo' <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
         <div class="icon-box icon-box-blue">
         <div class="icon"><i class="icofont-code-alt"></i></div>
              <h4 class="title"><a href="">'.$h['cat'].'</a></h4>
              <p class="description">'.$h['description'].'</p>
            </div>
          </div>';
            }
            
            if($h['cat']=='Design'){
          echo'<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="icon-box icon-box-cyan">
          <div class="icon"><i class="icofont-paint"></i></div>
              <h4 class="title"><a href="">'.$h['cat'].'</a></h4>
              <p class="description">'.$h['description'].'</p>
            </div>
          </div>';
            }
            if($h['cat']=='Marketing'){
          echo'<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-green">
          <div class="icon"><i class="icofont-brainstorming"></i></div>
              <h4 class="title"><a href="">'.$h['cat'].'</a></h4>
              <p class="description">'.$h['description'].'</p>
            </div>
          </div>';
            }
            if($h['cat']=='Business Development'){
          echo'<div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="icon-box icon-box-pink">
          <div class="icon"><i class="icofont-money"></i></div>
              <h4 class="title"><a href="">'.$h['cat'].'</a></h4>
              <p class="description">'.$h['description'].'</p>
            </div>
          </div>';
        }}}
          ?>
        </div>

      </div>
    </section><!-- End work Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" id="why" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <?php
     if(!empty($home_whyus)){
              foreach($home_whyus as $w){
         echo'<div class="col-lg-6 video-box">
            <img src="../dashboard/'.$w['home_position'].'" class="img-fluid" alt="">
            <a href="'.$w['link'].'" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>';
          echo'<div class="col-lg-6 d-flex flex-column justify-content-center p-5">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-book-reader"></i></div>
              <h4 class="title"><a href="">why us</a></h4>
              <p class="description">'.$w['description'].'</p>';
              if(!empty($whyuspoints)){
                echo'<ul>';
                foreach($whyuspoints as $po){
                  echo '<li><i class="icofont-check"></i>'.$po['point'].'</li>';
             }
          echo'</ul>';
          }
            //   <ul >
            //   <li><i class="icofont-check"></i> Software Engineering.</li>
            //   <li><i class="icofont-check"></i> Marketing.</li>
            //   <li><i class="icofont-check"></i> Photography.</li>
            //   <li><i class="icofont-check"></i> Designs.</li>
            //   <li><i class="icofont-check"></i> And also help you develop business.</li>


            // </ul>
            echo'
            </div>
          </div>
        </div>';}}
?>
      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= services Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h4> <strong>Services</strong> </h4>
          <p>The sole reason we are in business is to make life less difficult for our clients.</p>
        </div>
<?php
$i=0;
if(!empty($prog)){
foreach($prog as $p){
  $points=new get();
$points=$points->get_category2($p['cat']);
  if($i % 2==0){
       echo'<div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="../dashboard/'.$p['home_position'].'" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-4">
            <h3>'.$p['cat'].' :</h3>
            <p >';
            $str=$p['description'];
            if(strpos($str,"\n\n")){
            $arr = explode("\n\n", $str);
            foreach($arr as $ar){
            echo $ar."<br><br>";
            }}elseif(strpos($str,"\n")){

              $arr = explode("\n", $str);
              foreach($arr as $ar){
              echo $ar."<br>";
              }
            }else{
              echo $str;
            }
        
            echo'</p>';
            if(!empty($points)){
              echo'<ul>';
              foreach($points as $po){
                echo '<li><i class="icofont-check"></i>'.$po['point'].'</li>';
             }
        echo'</ul>';
        }
            echo'
          </div>
        </div>';
  }elseif($i % 2!=0){
       echo' <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="../dashboard/'.$p['home_position'].'" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>'.$p['cat'].' :</h3>
            <p >';
            $str=$p['description'];
            if(strpos($str,"\n\n")){
            $arr = explode("\n\n", $str);
            foreach($arr as $ar){
            echo $ar."<br><br>";
            }}elseif(strpos($str,"\n")){
              $arr = explode("\n", $str);
              foreach($arr as $ar){
              echo $ar."<br>";
              }
            }else{
              echo $str;
            }
            echo'</p>';
            if(!empty($points)){
              echo'<ul>';
              foreach($points as $po){
                echo '<li><i class="icofont-check"></i>'.$po['point'].'</li>';
           }
        echo'</ul>';
        }
          echo'
          </div>
        </div>';
}
$i++;
}}
?>


      

      </div>
    </section><!-- End services Section -->

        <!-- ======= clients Section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">

        <div class="section-title">
          <h4> <strong>Our Clients</strong> </h4>
        </div>

        <div class="row">
          <?php
          $i=0;
        if($get_all_client !=null){
         foreach($get_all_client as $r){
           if($i<6){
           echo'
          <div class="col-lg-2 col-md-6 d-flex align-items-stretch">
          <div class="member">
          <div class="member-img ">
                <img src="../dashboard/'.$r['position'].'" class="img-fluid" alt="">
              </div>
              </div>
          </div>';
          $i++;
        }}}else{
            echo "<h1>Soon</h1>";
          }
            ?>

       




        </div>
      </div> 
    
    </section><!-- End clients Section -->
    <div class="showbtn">
      <a href="clients.php" >
        <button class="btn">Show More</button> </a>
    </div> <br>


    
  </main><!-- End #main -->

  

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
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Vendor2 JS Files -->
<script src="assets/vendor2/jquery/jquery.min.js"></script>
<script src="assets/vendor2/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor2/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor2/php-email-form/validate.js"></script>
<script src="assets/vendor2/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor2/counterup/counterup.min.js"></script>
<script src="assets/vendor2/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor2/venobox/venobox.min.js"></script>
<script src="assets/vendor2/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor2/aos/aos.js"></script>



<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
</body>

</html>