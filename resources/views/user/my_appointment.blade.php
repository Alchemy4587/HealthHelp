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
          <a class="navbar-brand" href="#"><span class="text-secondary"></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
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
              <li class="nav-item">
                <a class="nav-link" href="{{ ('news') }}">News</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ ('contact') }}">Contact</a>
              </li>
              @if (Route::has('login'))
  
                @auth
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('myappointment') }}" style="background-color: rgb(190, 241, 113); color:white">My Appointments</a>
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