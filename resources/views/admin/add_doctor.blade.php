<!DOCTYPE html>
<html lang="en">
  <head>
    <style type="text/css">
      body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: black
        }
        
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-weight: bold;
            color: black
        }
        
        input[type="text"],
        input[type="number"],
        input[type="file"],
        select {
            width: 100%;
            padding: 10px;
            color: black;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        
        select {
            height: 40px;
        }
        
        .btn {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    @include('admin.css')
  </head>

  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

       @include('admin.navbar')

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <div class="container" align="center" style="padding-top: 100px">
              @if (session()->has('message'))
                <div class="alert alert-success">
                  <button type="button" class="close" data-dismiss="alert">
                    X
                  </button>
                  {{ session()->get('message') }}
                </div>
              @endif
              <!--<div class="container">
                
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                  @csrf
                    <div class="add">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" placeholder="Enter Doctor's Name" required>
                    </div><br><br>

                    <div class="add">
                        <label for="">Phone</label>
                        <input type="number" name="number" placeholder="Enter Number" required>
                    </div><br><br>

                    <div class="add">
                        <label for="">Speciality</label>
                        <select name="speciality" style="color: black" width="200px" required>
                            <option value="">--Select--</option>
                            <option value="Neurosurgen">Neurosurgen</option>
                            <option value="General Medicine">General Medicine</option>
                            <option value="Paeditrician">Paeditrician</option>
                            <option value="Cardiologist">Cardiologist</option>
                        </select>
                    </div><br><br>

                    <div class="add">
                        <label for="">Room No</label>
                        <input type="text" name="room" placeholder="Write the room number" required>
                    </div><br><br>

                    <div class="add">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" required>
                    </div><br><br>

                    <div>
                        <input type="submit" class="btn btn-success">
                    </div>

                </form>
              </div>-->
              <div class="container">
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="doctorName">Doctor Name:</label>
                        <input type="text" name="name" placeholder="Enter Doctor's Name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input type="number" name="number" placeholder="Enter Number" required>
                    </div>
                    <div class="form-group">
                        <label for="speciality">Speciality:</label>
                        <select name="speciality" style="color: black" width="200px" required>
                            <option value="">-- Select --</option>
                            <option value="Neurosurgen">Neurosurgen</option>
                            <option value="General Medicine">General Medicine</option>
                            <option value="Paeditrician">Paeditrician</option>
                            <option value="Cardiologist">Cardiologist</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="roomNo">Room Number:</label>
                        <input type="text" name="room" placeholder="Write the room number" required>
                    </div>
                    <div class="form-group">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Submit" style="color: black" width="200px">
                    </div>
                </form>
            </div>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>