<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

 
  <title>Eman E-learning</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/logo.png" rel="icon">
  <link href="assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300&display=swap" rel="stylesheet"> 

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
<style>
   .formy{
        padding: 50px;
        box-shadow: 0px 8px 30px #eeeeee;
    }
    .formy input{
        margin: 20px 0px 20px 0px;
        height: 50px;
        color: red;
    }
</style>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">الرئيسية</a></li>
          <li><a class="nav-link scrollto active" href="about.php">عنا</a></li>
          <li><a class="nav-link scrollto" href="guide.php">دليل المستخدم</a></li>
          <li><a class="nav-link scrollto " href="goals.php">الاهداف</a></li>
          <li><a class="nav-link scrollto" href="help.php">مساعدة</a></li>
          <li><a class="nav-link scrollto" href="contact.php">تواصل معنا</a></li>
          <li class="dropdown get-started-btn scrollto"><a style="padding: 0px 10px; color: white;" href="#"><span>تسجيل</span></a>
            <ul>
              <li><a href="sign-up.php">تسجيل</a></li>
              <li><a href="login.php">دخول</a></li>
            </ul>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/logo.png"></a></h1>
    </div>
  </header><!-- End Header -->

  
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up" style="padding-top: 100px;">

        <div class="section-title">
          <h2>نتيجة الاستبيان</h2>
        </div>

         <div class="row" data-aos="fade-up" data-aos-delay="100">
           <div class="col-lg-12 formy">
            <h1>مستوى مبتدئ</h1>
            <?php
                include_once'DBH.Inc.php';
                $email = $_SESSION['email'];
                $sql="SELECT*FROM user WHERE email='$email'";
                $result= mysqli_query($conn,$sql);
                if($row=mysqli_fetch_assoc($result))
                {
                    if($row['test2']=='s')
                    { ?>
                       <h2>نمط التعليم : تعليق توضيحى</h2>
                <?php }
                    else
                    {  ?>
                        <h2>نمط التعليم : توجيه مباشر</h2>
                <?php    }
                }
            ?>
          
               <a href="login.php"><h3>العودة الى تسجيل الدخول</h3></a>
            
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <img src="assets/img/logo.png">
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>عن الموقع</h4>
            <ul>
              <li><a href="#">تواصل معنا</a></li>
              <li><a href="#">عنوان و بيانات الرساله</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>الاقسام</h4>
            <ul>
              <li><a href="#">الدروس</a></li>
              <li><a href="#">المساعده</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div style="margin: 0 auto;" class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; جميع الحقوق محفوظه
        </div>
        <div class="credits">
          <strong><span>Eman-learning</span></strong>
        </div>
      </div>
      <div class="social-links text-center text-md-end pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>