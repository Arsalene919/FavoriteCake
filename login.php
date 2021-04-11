<?php
session_start();
$message="";
if(count($_POST)>0) {
 $con = mysqli_connect('127.0.0.1:3306','root','','favorite cake') or die('Unable To connect');
$result = mysqli_query($con,"SELECT * FROM form WHERE Name='" . $_POST["Name"] . "' and password = '". $_POST["password"]."'");
$row  = mysqli_fetch_array($result);
if(is_array($row)) {
$_SESSION["Email"] = $row['Email'];
$_SESSION["Name"] = $row['Name'];
} else {
$message = "Invalid Name or Password!";
}
}
if(isset($_SESSION["Email"])) {
header("Location:controller.php");
}
?>
<html>
<head>
<title>User Login</title>

<title>Favorite Cake</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="shortcut icon" type="gif" href="templates/images/logo.gif">
     <link rel="stylesheet" href="templates/css/bootstrap.min.css">
     <link rel="stylesheet" href="templates/css/font-awesome.min.css">
     <link rel="stylesheet" href="templates/css/aos.css">
     <link rel="stylesheet" href="templates/css/style.css">
     <link rel="stylesheet" href="templates/js//style-swiper.css" type="text/css"/>
     <link rel="stylesheet" href="templates/css/not.css">
</head>
<body data-spy="scroll" data-target="#navbarNav" data-offset="50">

<nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">

        <a class="navbar-brand" href="index1.php">
            <div class="d-flex align-items-center">
                <div>
                    <img id="logo" src="templates/images/logo.gif">
                </div>
                <div class="d-flex align-items-end">
                    Favorite Cake
                </div>
            </div>
        </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-lg-auto">
            <li class="nav-item">
                        <a href="#home" class="nav-link smoothScroll"><i class="fa fa-home"></i> Home</a>
                    </li>

                    <li class="nav-item">
                        <a href="#services" class="nav-link smoothScroll"><i class="fa fa-gift"></i> Services</a>
                    </li>

                    <li class="nav-item">
                        <a href="#about" class="nav-link smoothScroll"><i class="fa fa-info-circle"></i> About Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="#contact" class="nav-link smoothScroll"><i class="fa fa-phone"></i> Contact Us</a>
                    </li>

                    <li class="nav-item">
                        <a href="login.php"   class="nav-link smoothScroll"><i class="fa fa-sign-in"></i> Login</a>
                    </li>

                <li class="nav-item">
                </li>

                <li class="nav-item">
                        <a href="index.php" class="nav-link smoothScroll"><i class="fa fa-shopping-cart"></i><div class="txt-heading"></div><p id="num"></p></a>
                        
                </li>

    
            </ul>
 
            <ul class="navbar-nav nav-flex-icons">

                <hr>
                <li class="nav-item">
                    <a class="nav-link waves-effect" href="signup.php">
                        <span> Signup </span>
                    </a>
                </li>



            </ul>

            
        </div>

    </div>
</nav>

<section class="hero d-flex flex-column justify-content-center align-items-center" id="home">

<div class="bg-overlay"></div>

<div class="container">
  <div class="row">

    <div class="col-lg-8 col-md-10 mx-auto col-12">
      <div class="hero-text mt-5 text-center" data-aos="fade-up" data-aos-delay="700">

        <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">The finest cakes you'll ever taste</h1>

        <div class="container">
          <p>Don't have an account yet? Then please <a href="signup.php">signup</a></p>

          <form class="login" id="login_form" method="post" action="login.php">
        

            <div class="row p-3 text-light">
              <div class="col-md-6 col-12">
               Email:
              </div>
              <div class="col-md-6 col-12 d-flex flex-column">
              <input type="text" class="form-control" name="cf-name" placeholder="Mohamed Salah">
              </div>
            </div>
            <div class="row p-3 text-light mb-3">
              <div class="col-md-6 col-12">
                Password:
              </div>
              <div class="col-md-6 col-12 d-flex flex-column">
              <input type="password" class="form-control" name="cf-password" placeholder="">
              </div>
            </div>
            <input type="hidden" name="{{ redirect_field_name }}" value="core:home" />
            
            <button class="btn btn-outline-danger btn-sm" type="submit"><a href="index1.php">Sign In &raquo;</button>
          </form>
        </div>

      </div>
    </div>

  </div>
</div>
</section>
<footer class="page-footer text-center font-small wow fadeIn text-light" style="background-color: black;">

    <div class="container pt-4 text-light">
        <div class="row">
            <div class="d-flex justify-content-center mx-auto col-md-4 col-12">
                <p class="copyright-text">Copyright &copy; 2020 Favorite Cake</p>
            </div>
            <div class="d-flex justify-content-center mx-auto col-md-2 col-12 mb-3">
                <ul class="social-icon">
                    <li><a href="#" class="fa fa-facebook"></a></li>
                    <li><a href="#" class="fa fa-twitter"></a></li>
                    <li><a href="#" class="fa fa-instagram"></a></li>
                </ul>
            </div>
            <div class="d-flex justify-content-center mx-auto col-md-6 col-12">
                <p class="mr-4">
                    <i class="fa fa-envelope-o mr-1"></i>
                    <a href="#">mailcontact@info.com</a>
                </p>

                <p><i class="fa fa-phone mr-1"></i> +216 12345678</p>
            </div>
        </div>
    </div>
</footer>

     <script src="templates/js/jquery.min.js"></script>
     <script src="templates/js/ls.js"></script>
     <script src="templates/js/bootstrap.min.js"></script>
     <script src="templates/js/aos.js"></script>
     <script src="templates/js/smoothscroll.js"></script>
     <script src="templates/js/custom.js"></script>

</body>
</html>