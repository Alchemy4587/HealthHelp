<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>HealthHelp</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
  <style>
    .card{
      background-image: url("../assets/img/bg.jpg");
      height: 80vh;
      background-repeat: no-repeat;
      background-size: cover;
    }
  </style>
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
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{ url('home') }}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="doctors.html">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            @if (Route::has('login'))

              @auth
              <li class="nav-item">
                <a class="nav-link" href="{{ url('myappointment') }}" style="background-color: skyblue; color:black">My Appointments</a>
              </li>
              <form action="{{ route('logout') }}" method="post">
                @csrf
                <li class="nav-item">
                  <button class="btn btn-primary ml-lg-3">Logout</button>
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
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>
  <!--
  <div align="center" style="padding:70px;" id="body_appointment">
    <table>
        <tr style="background-color: rgb(168, 151, 151)">
            <th style="padding:10px; font-size:20px; color:black;">Doctor Name</th>
            <th style="padding:10px; font-size:20px; color:black;">Date</th>
            <th style="padding:10px; font-size:20px; color:black;">Message</th>
            <th style="padding:10px; font-size:20px; color:black;">Status</th>
            <th style="padding:10px; font-size:20px; color:black;">Action</th>
        </tr>
    
       {{--   @foreach ($appoint as $appoints)
            <tr style="background-color: rgb(168, 151, 151)" align="center">
                <td style="padding:10px; color:black;">{{ $appoints->doctor }}</td>
                <td style="padding:10px; color:black;">{{ $appoints->date }}</td>
                <td style="padding:10px; color:black;">{{ $appoints->message }}</td>
                <td style="padding:10px; color:black;">{{ $appoints->status }}</td>
                <td><a class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Cancel Thiscmd')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel</a></td>
            </tr>
        @endforeach
      </table> --}}
  </div>-->

  <div class="col-lg-12 stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">My Appointments</h4>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered table-contextual">
            <thead>
              <tr>
                <th>Doctor Name</th>
                <th>Date</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appoint as $appoints)
                <tr class="table-info">
                  <td>{{ $appoints->doctor }}</td>
                  <td>{{ $appoints->date }}</td>
                  <td>{{ $appoints->message }}</td>
                  <td>{{ $appoints->status }}</td>
                  <td><a class="btn btn-danger" onclick="return confirm('Are You Sure You Want To Cancel Thiscmd')" href="{{ url('cancel_appoint',$appoints->id) }}">Cancel</a></td>
                </tr>
              @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>