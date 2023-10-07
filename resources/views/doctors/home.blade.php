<!DOCTYPE html>
<html lang="en">
<head>
  @include('doctors.css')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

   @include('doctors.navbar')
   
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
     @include('doctors.sidebar')
      <!-- partial -->
      @include('doctors.body')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  @include('doctors.script')
</body>

</html>
