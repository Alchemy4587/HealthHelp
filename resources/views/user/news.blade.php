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
            <li class="nav-item">
              <a class="nav-link" href="{{ url('about') }}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('appointment') }}">Make An Appointment</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('doctor') }}">Doctors</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('news') }}">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('contact') }}">Contact</a>
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
                  <a class="btn btn-secondary ml-lg-3" href="{{ route('login') }}">Login</a>
                </li>

                <li class="nav-item">
                  <a class="btn btn-secondary ml-lg-3" href="{{ route('register') }}">Register</a>
                </li> 
              @endauth 

            @endif
          </ul>
        </div>
      </div> 
    </nav>
  </header>

  <div class="page-banner overlay-dark bg-image" style="background-image: url(../assets/img/doc.jpg);">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Blog</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">News</h1>
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Covid19</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">List of Countries without Coronavirus case</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/Colette.jpg" alt="">
                      </div>
                      <span>Banla Colette</span>
                    </div>
                    <span class="mai-time"></span> 1 week ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Dental</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/black-doctor-patient.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">What is the impact of eating too much sugar?</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/Joy.jpg" alt="">
                      </div>
                      <span>Raina Joy</span>
                    </div>
                    <span class="mai-time"></span> 2 weeks ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Cancer</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/sample test.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">The Latest Breakthroughs in Cancer Research</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/person_3.jpg" alt="">
                      </div>
                      <span>Josh Wilson</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Neurology</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_4.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">What are the nonmedical factors most closely linked to death risk?</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/Joy.jpg" alt="">
                      </div>
                      <span>Raina Joy</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Cardiology</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_5.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">Do gut bacteria contribute to ethnic health disparities</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/person_1.jpg" alt="">
                      </div>
                      <span>Roger Adams</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Patient Services</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/blog_1.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">Does being treated badly in a hospital add the sickness</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/dyl.jpeg" alt="">
                      </div>
                      <span>Yves Dylane</span>
                    </div>
                    <span class="mai-time"></span> 1 month ago
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">General Health</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/racism.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">Racism in mental healthcare: An invisible barrier</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/Colette.jpg" alt="">
                      </div>
                      <span>Banla Colette</span>
                    </div>
                    <span class="mai-time"></span> 2 months ago
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-sm-6 py-3">
              <div class="card-blog">
                <div class="header">
                  <div class="post-category">
                    <a href="#">Environmental Health</a>
                  </div>
                  <a href="blog-details" class="post-thumb">
                    <img src="../assets/img/blog/breath.jpg" alt="">
                  </a>
                </div>
                <div class="body">
                  <h5 class="post-title"><a href="blog-details.html">How does breathing in bad air affect our respiratory system</a></h5>
                  <div class="site-info">
                    <div class="avatar mr-2">
                      <div class="avatar-img">
                        <img src="../assets/img/person/dyl.jpeg" alt="">
                      </div>
                      <span>Yves Dylane</span>
                    </div>
                    <span class="mai-time"></span> 4 weeks ago
                  </div>
                </div>
              </div>
            </div>

            <div class="col-12 my-5">
              <nav aria-label="Page Navigation">
                <ul class="pagination justify-content-center">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                  </li>
                  <li class="page-item active" aria-current="page">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                  </li>
                </ul>
              </nav>
            </div>
          </div> <!-- .row -->
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
            <div class="sidebar-block">
              <h3 class="sidebar-title">Search</h3>
              <form action="#" class="search-form">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search Here">
                  <button type="submit" class="btn"><span class="icon mai-search"></span></button>
                </div>
              </form>
            </div>
            

            <div class="sidebar-block">
              <h3 class="sidebar-title">Recent Blog</h3>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_1.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Increase in infant mortality rate in the past month</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> October 12, 2023</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 19</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_2.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">What are the causes of low sperm count</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> October 12, 2023</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 39</a>
                  </div>
                </div>
              </div>
              <div class="blog-item">
                <a class="post-thumb" href="">
                  <img src="../assets/img/blog/blog_3.jpg" alt="">
                </a>
                <div class="content">
                  <h5 class="post-title"><a href="#">Easy tips to prevent gastric</a></h5>
                  <div class="meta">
                    <a href="#"><span class="mai-calendar"></span> October 12, 2023</a>
                    <a href="#"><span class="mai-person"></span> Admin</a>
                    <a href="#"><span class="mai-chatbubbles"></span> 17</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="sidebar-block">
              <h3 class="sidebar-title">Health Tip Of The Day</h3>
              <p>
                Stay hydrated for a glowing skin and a healthy body. Aim to drink at least 8 glasses of water a day to keep your skin radiant and support your overall well-being. <br> <span>#StayHydrated</span> <br>
                #HealthyHabits
              </p>
            </div>
          </div>
        </div> 
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

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