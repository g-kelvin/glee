<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
<title>Messaging - Weevpro Enterprise - Water & Irrigation</title>

  <!-- Mobile Specific Metas
================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Best Cleaning Company in Kenya - We understand your needs on Cleaning">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

  <!-- Favicon
================================================== -->
  <link rel="icon" type="image/png" href="images/favicon.png">

  <!-- CSS
================================================== -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- FontAwesome -->
  <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
  <!-- Animation -->
  <link rel="stylesheet" href="plugins/animate-css/animate.css">
  <!-- slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  <!-- Colorbox -->
  <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
  <!-- Template styles-->
  <link rel="stylesheet" href="css/style.css">

</head>
<body>
  <div class="body-inner">

    <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
              <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                     <li><i class="fas fa-map-marker-alt"></i> <p class="info-text">Along Outering Road, Next to Total Petrol Station ,Just After Pipeline Stage </p>
                    </li>
                </ul>
              </div>
              <!--/ Top info end -->
  
              <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                      <a title="Facebook" href="https://facebbok.com">
                          <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                      </a>
                      <a title="Twitter" href="https://twitter.com">
                          <span class="social-icon"><i class="fab fa-twitter"></i></span>
                      </a>
                      <a title="Instagram" href="https://instagram.com">
                          <span class="social-icon"><i class="fab fa-instagram"></i></span>
                      </a>
                      <a title="Linkdin" href="https://github.com">
                          <span class="social-icon"><i class="fab fa-github"></i></span>
                      </a>
                    </li>
                </ul>
              </div>
              <!--/ Top social end -->
          </div>
          <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </div>
    <!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
  <div class="site-navigation">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                
                <div class="logo">
                    <a class="d-block" href="index.html">
                      <img loading="lazy" src="images/logo.png" alt="Constra">
                    </a>
                </div><!-- logo end -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div id="navbar-collapse" class="collapse navbar-collapse">
                     <ul class="nav navbar-nav ml-auto align-items-center">
                        <li class="nav-item"><a class="nav-link" href="index.html">Home</a></li>

                     <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
                     <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>           
                      <li class="nav-item dropdown">
                          <a href="Products.html" class="nav-link dropdown-toggle" data-toggle="dropdown">Products<i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="Products.html"><small><b>Borehole Pumps</b> </small></a></li>
                            <li><a href="boreholemotors.html"><small><b>Borehole Motors</b> </small></a></li>
                            <li><a href="surfacepumps.html"><small><b>Surface Pumps </b> </small></a></li>
                            <li><a href="verticalpumps.html"><small><b>Vertical Pumps </b> </small></a></li>
                            <li><a href="fittings.html"><small><b>Irrigation Accessories </b> </small></a></li>


                          </ul>
                      </li>               
                      <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
              
                     <li class="nav-item"><a class="nav-link" href="careers.html">Careers</a></li>
              
                      <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>

                      <li class="header-get-a-quote">
                          <a class="btn btn-primary" href="contact.html">Get Free Quote</a>
                        </li></ul>
                </div>
              </nav>
          </div>
          <!--/ Col end -->
        </div>
        <!--/ Row end -->
    </div>
    <!--/ Container end -->

  </div>
  <!--/ Navigation end -->
</header>
<!--/ Header end -->
<div id="banner-area" class="banner-area" style="background-image:url(images/h.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title" style="color: #64dd17">Messages</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                      <li class="breadcrumb-item"><a href="#" ><b style="color: black">Home </b> </a></li>
                      <li class="breadcrumb-item"><a href="#"  > <b style="color: black"> Company </b></a></li>
                      <li class="breadcrumb-item active" aria-current="page"  > <b style="color: black">Messages </b></li>
                    </ol>
                </nav>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end --> 


 <?php
  if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message']; 

        $to = "sales@weevpro.co.ke";
        // $subject = 'Message from GLEE HYGIENE SOLUTIONS LTD'." , ";
        $msg ="Name: ".$name." , "."Email: ".$email." , "." Subject: ".$subject." wrote the following: ".$message;
        $headers ="From: ".$email;
         if(mail($to,$subject,$msg,$headers)){
            
          echo "<b>Message Sent. Thank You $name for your message.<b>";

          
}

else {
    echo "yolo";
    
}

       


    }
    else
    {
        echo "try again";
    }
?>






<footer id="footer" style="background-color: #00aeef; color: black;">
    <div class="footer-main">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-4 col-md-6 footer-widget footer-about">
            <h3 class="widget-title">Contact Us</h3>
            
            <p align="justify">
              Address: Along Outering Road, Next to Total Petrol Station ,Just After Pipeline Stage, Before The Former Tajmall Roundabout - Nairobi Kenya<br>
              Email: weevpro@gmail.com <br>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sales@weevpro.co.ke <br>
              Tel: +254 712 902 557 | +254 741 452 918 | <br>
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+254 755 462 032
            </p>
         
         
          </div><!-- Col end -->

          <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
            <h3 class="widget-title">Working Hours</h3>
            <div class="working-hours" align="justify">
              We work 7 days a week, every day excluding major holidays. Contact us if you have an emergency, with our
              Hotline and Contact form.
              <br><br> Monday - Friday: <span class="text-right">7:30 AM - 18:00 PM </span>
              <br> Saturday: <span class="text-right">8:00 AM - 15:00 PM</span>
              <br> Sunday and holidays: <span class="text-right">09:00 AM - 14:00 PM</span>
            </div>
          </div><!-- Col end -->

         <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget" >
            <h3 class="widget-title">Quick Links</h3>
            <ul class="list-arrow">
              <li><a href="index.html"  >Home</a></li>
              <li><a href="about.html">About</a></li>
              <li><a href="services.html">Our Services</a></li>
              <li><a href="gallery.html">Gallery</a></li>
              <li><a href="Contact.html">Contact</a></li>
            </ul>
          </div><!-- Col end -->
        </div><!-- Row end -->
      </div><!-- Container end -->
    </div><!-- Footer main end -->

    <div class="copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="copyright-info text-center">
              <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script>,  All Rights Reserved. <a href="https://weevpro.co.ke">Weevpro Enterprise - Water & Irrigation</a></span>
            </div>
          </div>


        </div><!-- Row end -->

        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
          <button class="btn btn-primary" title="Back to Top">
            <i class="fa fa-angle-double-up"></i>
          </button>
        </div>

      </div><!-- Container end -->
    </div><!-- Copyright end -->
  </footer><!-- Footer end -->



  <!-- Javascript Files
  ================================================== -->

  <!-- initialize jQuery Library -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap jQuery -->
  <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
  <!-- Slick Carousel -->
  <script src="plugins/slick/slick.min.js"></script>
  <script src="plugins/slick/slick-animation.min.js"></script>
  <!-- Color box -->
  <script src="plugins/colorbox/jquery.colorbox.js"></script>
  <!-- shuffle -->
  <script src="plugins/shuffle/shuffle.min.js" defer></script>


  <!-- Google Map API Key-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
  <!-- Google Map Plugin-->
  <script src="plugins/google-map/map.js" defer></script>

  <!-- Template custom -->
  <script src="js/script.js"></script>

  </div><!-- Body inner end -->
  </body>

  </html>