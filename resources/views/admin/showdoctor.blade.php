<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      .card{
        width: 100%;
        overflow: auto;
        background-image: url("../assets/img/showbg.jpg");
        color: black;
        border-radius: 8px;
        margin-top: 50px;
      }
      
    </style>
  </head>

  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
      <!--
      <div class="container-fluid page-body-wrapper" id="showdoc">
        <div align="center" style="padding-top:50px;">
            <table style="border:1px solid black;">
                <tr style="background-color: white;">
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Room No</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>

                {{--@foreach ($data as $doctor)
                      
                    <tr align="center" style="background-color: skyblue;">
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img height="10px" width="80px" src="doctorimage/{{ $doctor->image }}" alt="logo"></td>
                        <td>
                          <a onclick="return confirm('Are You Sure You Want To Delete This')" class="btn btn-danger" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a>
                          <a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a>
                        </td>
                    </tr>
                @endforeach--}}
            </table>
        </div>

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
                    <th style="color:black;">Doctor Name</th>
                    <th style="color:black;">Phone</th>
                    <th style="color:black;">Speciality</th>
                    <th style="color:black;">Room No</th>
                    <th style="color:black;">Image</th>
                    <th style="color:black;">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($data as $doctor)
                    <tr class="table-info">
                      <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->phone }}</td>
                        <td>{{ $doctor->speciality }}</td>
                        <td>{{ $doctor->room }}</td>
                        <td><img height="10px" width="80px" src="doctorimage/{{ $doctor->image }}" alt="logo"></td>
                        <td>
                          <a onclick="return confirm('Are You Sure You Want To Delete This')" class="btn btn-danger" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a>
                          <a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a>
                        </td>
                    </tr>
                  @endforeach
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>