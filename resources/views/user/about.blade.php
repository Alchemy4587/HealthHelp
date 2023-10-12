<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>HealthHelp</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  
  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Logis/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Logis/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="Logis/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <link href="Logis/assets/css/main.css" rel="stylesheet">

</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <div class="logo">
         <img src="../assets/img/Logo3.0.png" alt="" width="110px">
        </div>
        <a class="navbar-brand" href="#"><span class="text-secondary"></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ url('home') }}">Home</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('appointment') }}">Make An Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('doctor') }}">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ ('news') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ ('contact') }}">Contact</a>
            </li>
            @if (Route::has('login'))

              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ url('myappointment') }}" style="background-color: greenyellow; color:white">My Appointments</a>
              </li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <li class="nav-item">
                  <button class="btn btn-secondary ml-lg-3">Logout</button>
                </li>
              </form>
              
           
              @else             
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li> 
              @endauth 

            @endif
          </ul>
        </div>
      </div> 
    </nav>
  </header>

  @if (session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert">
          X
        </button>
        {{ session()->get('message') }}
      </div>
  @endif

  <div class="page-hero bg-image" style="background-image: url(../assets/img/doc.jpg);">
    <div class="hero-section" id="shade">
      <div class="container text-center wow zoomIn">
        <h1 class="display-4">Health Help</h1>
        <span class="subhead">Health Is Wealth</span><br><br>
      </div>
    </div>
  </div>

  <div class="page-section bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Chat</span> with a doctor</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Health Help</span>-Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>Health Help</span>- Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->
  </div>

  <section id="about" class="about pt-0">
    <div class="container" data-aos="fade-up">

      <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
          <img src="Logis/assets/img/team.jpg" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 content order-last  order-lg-first">
          <h3>About Us</h3>
          <p>
            Welcome to the future of healthcare administration and patient care, Health Help our HMS is a cutting-edge solution designed to streamline hospital operations, enhance patient experiences, and improve overall healthcare outcomes.
          </p>
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-diagram-3"></i>
              <div>
                <h5>Our Mission</h5>
                <p>Our mission is to revolutionize healthcare management by providing state-of-the-art tools and services to healthcare providers and institutions. We are dedicated to delivering excellence in healthcare administration, patient care, and medical records management.</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-fullscreen-exit"></i>
              <div>
                <h5>Our Commitment</h5>
                <p>We are committed to serving the healthcare community by offering a comprehensive suite of services tailored to the unique needs of hospitals, clinics, and medical professionals. Our commitment is rooted in the following core principles</p>
              </div>
            </li>
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-broadcast"></i>
              <div>
                <h5>Ensuring Accessibility for All</h5>
                <p>We are committed to ensuring that our Hospital Management System is accessible to healthcare providers and patients of all backgrounds and abilities. Accessibility is not just a goal; it's a fundamental principle of our system</p>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->

  <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">Health Help</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Patients</li>
          <li><a href="#">Medical Records</a></li>
          <li><a href="#">Schedule Appoitnment</a></li>
          <li><a href="#">Prescription</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
        </ul>

        <ul class="box input-box">
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Send Me Notifications"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © 2023 <a href="#">HEALTH HELP</a>All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>