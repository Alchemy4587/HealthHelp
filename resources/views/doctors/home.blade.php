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
  <script src="doctors/template/vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="doctors/template/vendors/chart.js/Chart.min.js"></script>
  <script src="doctors/template/js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="doctors/template/js/off-canvas.js"></script>
  <script src="doctors/template/js/hoverable-collapse.js"></script>
  <script src="doctors/template/js/template.js"></script>
  <script src="doctors/template/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="doctors/template/js/dashboard.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
