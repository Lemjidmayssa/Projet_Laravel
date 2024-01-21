<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>inscrivez-vous</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  

<body>

  <!-- ======= Header ======= -->
  <header id="header" >
    <div class="sticky-cust">

      <div class="direction row">
        <div class="col-1-sm col-lg-2 col-md-4"> <h1 class="logo me-auto"><a href="index.html"><img src="assets/img/dark.png" class="img-fluid" alt=""></a></h1></div>
       <div class="col-lg-7 col-md-6 col-sm-5 center-nav">
        
        <nav id="navbar" class="navbar">
          
          <ul>
            <li><a href="index.php" >HOME</a></li>
            
            <li><a href="Login.php" class="active">Login</a></li>
            <li><a href="SignUP.php" >Sign UP</a></li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
       </div>
       
  
  
      </div>
    </div>
  
  </header><!-- End Header -->


  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
   <!-- ======= log Section ======= -->
   <section id="log" class="log">
      <div class="container">
        

        <div class="section-title">
          <h2>log in</h2>
          <p>Log in </p>
        </div>

        <form action="insertion.php" method="GET" class="formRND" style="  font-size: 14px;  color: #787e82;" >
  <fieldset>

      <p class=>Remplissez le formulaire ci-dessous 
      </p>
      <label >Nom:</label>
      <input type="text"  name="nom" placeholder="Votre nom ici">
  
      <label >Prénom:</label>
      <input type="text"  name="prenom" placeholder="Votre prenom ici">
  
      <label >Date de naissance:</label>
      <input type="date"  name="date" >
     
      <label >adresse:</label>
      <input type="text"  name="adresse" placeholder="Votre adresse ici">
  
      <label >Telephone:</label>
      <input type="tel"  name="tel" placeholder="Votre numéro de Telephone ici">
  
      <label >Email:</label>
      <input type="email"  name="email" placeholder="Votre email ici">


      <label for="sexe">Sexe</label>
      <input type="radio" name="sexe" value="homme"/> Homme 
      <input type="radio" name="sexe" value="femme"/> Femme

      <br><br>
      

  
      <input type="submit" value="submit"/> <input type="reset" value="reset"/>

    </fieldset>
    </form><!-- End log in Section -->



  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>JURSE2025</h3>
              <p>
              Nik. Plastira 49, <br>
              71201 Heraklion Crete, Greece<br><br>
                <strong>Phone:</strong> +21626227372<br>
                <strong>Email:</strong> Mohamed_Amine_HOSNY@HOTMAIL.COM<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.twitter.com/" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="https://www.google.com/" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="https://www.linkedin.com/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          

          

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Stay connected!</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Remote Sensing Laboratory, Foundation for Research and Technology - Hellas (FORTH)</span></strong>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/groovin-free-bootstrap-theme/ -->
        Designed by <a href="#">iteam University</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js')}}"></script>

</body>

</html>