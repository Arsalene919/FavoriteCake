<?php
$con=new PDO('mysql:host=localhost; dbname=favorite cake','root','');
?>
<!DOCTYPE html>
<html lang="en">
<head>

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

        <a class="navbar-brand" href="home">
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
                        <a href="login.php" class="nav-link smoothScroll"><i class="fa fa-sign-in"></i> Login</a>
                    </li>

                <li class="nav-item">
                </li>

                <li class="nav-item">
                        <a href="cart.php" class="nav-link smoothScroll"><i class="fa fa-shopping-cart"></i><div class="txt-heading"></div>
                        <p id="num">
                            <!--number of commands-->
                        </p>
                    </a>
                        
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
                          <div class="hero-text mt-5 text-center">

                                <h1 class="text-white" data-aos="fade-up" data-aos-delay="500">The finest cakes you'll ever taste</h1>

                                <a href="#about" class="btn custom-btn bordered mt-3" data-aos="fade-up" data-aos-delay="700">Learn More</a>
                               
                          </div>
                     </div>

                </div>
           </div>
 </section>

 <section class="feature" id="feature">
    <div class="container">
        <div class="row">

            <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                <h2 class="mb-3 text-white" data-aos="fade-up">New to Favorite Cake ?</h2>

                <h6 class="mb-4 text-white" data-aos="fade-up">Create an account and win some nice reduction coupons !</h6>

                <p data-aos="fade-up" data-aos-delay="200">A simple click !</p>

                <a href="signup.php" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" >Join us today</a>
            </div>

            <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                 <div class="about-working-hours">
                      <div>

                            <h2 class="mb-4 text-white" data-aos="fade-up" data-aos-delay="500">Working hours</h2>

                           <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Monday - Friday</strong>

                            <p data-aos="fade-up" data-aos-delay="800">7:00 AM - 10:00 PM</p>

                            <strong class="mt-3 d-block" data-aos="fade-up" data-aos-delay="700">Saturday & Sunday</strong>

                            <p data-aos="fade-up" data-aos-delay="800">06:00 AM - 11:00 PM</p>
                           </div>
                      </div>
                 </div>
            </div>

        </div>
    </div>
</section>

<selection class="services" id="services"> 
    <div class="container"></div>
          <div class="col-lg-8 col-md-10 mx-auto col-12" data-aos="fade-up" data-aos-delay="700">
           <div id="myStyleSwiper">
			<div class="style-swiper-slide-btn-wrap">
				<button class="style-swiper-btn-prev" title="scroll previous">
					<i class="fa fa-chevron-left"></i>
				</button>

				<div class="style-swiper-slides hide-scrollbar">
					<img class="active" id="1" src="images/1.jpg" alt="1">
                   <img src="images/2.jpg" alt="2" id="1">
                   <img src="images/3.jpg" alt="3" id="2">
                   <img src="images/4.jpg" alt="4" id="3"> 
                   <img src="images/5.jpg" alt="5">
                   <img src="images/6.jpg" alt="6">
                   <img src="images/7.jpg" alt="7">
                   <img src="images/8.jpg" alt="8">
                   <img src="images/9.jpg" alt="9">
                   <img src="images/10.jpg" alt="10">
                   <img src="images/11.jpg" alt="11">
                   <img src="images/12.jpg" alt="12">
                </div>
				<button class="style-swiper-btn-next" title="scroll next">
					<i class="fa fa-chevron-right"></i>
				</button>

			</div>

			<div class="style-swiper-pagination-wrap">
				<ol class="style-swiper-pagination"></ol>
            </div>
        
        </div>
        
		<script src="templates/js/style-swiper.js"></script>
		<script>
			var styleSwiper = new StyleSwiper({
				debug:true,
				el:document.getElementById("myStyleSwiper")
			});
		</script>
    </div>
    </div>
</selection>

<section class="feature" id="feature">
   
    <div class="container">
        <div class="row">

            <div class="d-flex flex-column justify-content-center ml-lg-auto mr-lg-5 col-lg-5 col-md-6 col-12">
                
                <h2 class="mb-3 text-white" data-aos="fade-up">Description</h2>

                <h6 class="mb-4 text-white" data-aos="fade-up">Incenderat autem audaces usque ad insaniam homines ad haec, quae nefariis egere conatibus, Luscus quidam curator urbis subito visus: eosque ut heiulans baiolorum praecentor ad expediendum quod orsi sunt incitans vocibus crebris. qui haut longe postea ideo vivus exustus est.</h6>
            </div>

            <div class="mr-lg-auto mt-3 col-lg-4 col-md-6 col-12">
                 <div class="about-working-hours">
                      <div>
                        <h6 class="price" data-aos="fade-up"> PRICE : 100$</h6>
                        <a href="#" class="btn custom-btn bg-color mt-3" data-aos="fade-up" data-aos-delay="300" data-toggle="modal" data-target="#cart" id="add">ADD TO CART</a>
                           </div>
                      </div>
                 </div>
            </div>
        </div>
    </div>
</section>
    

 <section class="about section" id="about">
    <div class="container">
         <div class="row">

                 <div class="mt-lg-5 mb-lg-0 mb-4 col-lg-5 col-md-10 mx-auto col-12">
                     <h2 class="mb-4" data-aos="fade-up" data-aos-delay="300">Hello, we are Favorite Cake Team !</h2>

                     <p data-aos="fade-up" data-aos-delay="400">Martinus agens illas provincias pro praefectis aerumnas innocentium graviter gemens saepeque obsecrans, ut ab omni culpa inmunibus parceretur, cum non inpetraret, minabatur se discessurum: ut saltem id metuens perquisitor malivolus tandem desineret quieti coalitos homines in aperta pericula proiectare.</p>

                 </div>

                 <div class="ml-lg-auto col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="700">
                     <div class="team-thumb">
                         <img src="templates/images/Arso.jpeg" class="img-fluid" alt="Chief">

                         <div class="team-info d-flex flex-column">

                             <h3>Arso</h3>
                             <span>Chief</span>

                             <ul class="social-icon mt-3">
                                 <li><a href="#" class="fa fa-twitter"></a></li>
                                 <li><a href="#" class="fa fa-instagram"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

                 <div class="mr-lg-auto mt-5 mt-lg-0 mt-md-0 col-lg-3 col-md-6 col-12" data-aos="fade-up" data-aos-delay="800">
                     <div class="team-thumb">
                         <img src="templates/images/Jiji.jpg" class="img-fluid" alt="Designer">

                         <div class="team-info d-flex flex-column">

                             <h3>Jiji</h3>
                             <span>Cake Designer</span>

                             <ul class="social-icon mt-3">
                                 <li><a href="#" class="fa fa-instagram"></a></li>
                                 <li><a href="#" class="fa fa-facebook"></a></li>
                             </ul>
                         </div>
                     </div>
                 </div>

         </div>
    </div>
</section>

<section class="contact section" id="contact">
    <div class="container">
         <div class="row">

              <div class="ml-auto col-lg-5 col-md-6 col-12">
                  <h2 class="mb-4 pb-2" data-aos="fade-up" data-aos-delay="200">Feel free to ask anything</h2>

                  <form action="index1.php" method="post" class="contact-form webform" data-aos="fade-up" data-aos-delay="400" role="form">
                      <input type="text" class="form-control" name="Name" placeholder="Name">

                      <input type="email" class="form-control" name="Email" placeholder="Email">

                      <textarea class="form-control" rows="5" name="Message" placeholder="Message"></textarea>

                      <button type="submit" class="form-control" id="submit-button" name="submit">Send Message</button>

                      <?php
    if(isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Message'])){
            $a=$_POST['Name'];
            $b=$_POST['Email'];
            $c=$_POST['Message'];
            $sql = "INSERT INTO message
VALUES ('$a', '$b', '$c')";

if ($con->query($sql) === TRUE) {
  echo "New record created successfully";
} else { 
     echo"Votre message $c a été ajouté";
     }
 }
?>
</form>
</div>

              <div class="mx-auto mt-4 mt-lg-0 mt-md-0 col-lg-5 col-md-6 col-12">
                  <h2 class="mb-4" data-aos="fade-up" data-aos-delay="600">Where you can <span>find us</span></h2>

                  <p data-aos="fade-up" data-aos-delay="800"><i class="fa fa-map-marker mr-1"></i> Université Centrale (Ecole IT), Avenue Kheireddine Pacha, Tunis</p>
                  <div class="google-map" data-aos="fade-up" data-aos-delay="900">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3193.9872068945438!2d10.181950815134567!3d36.81882647435101!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd34884da14dd9%3A0x9ccc5b79fec78f05!2sUniversit%C3%A9%20Centrale%20(Ecole%20IT)!5e0!3m2!1sfr!2stn!4v1588518736286!5m2!1sfr!2stn" width="1920" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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


