<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      #showdoc{
        width: 100%;
        overflow: auto;
        background-image: url("../assets/img/showbg.jpg");
        color: black;
        border-radius: 8px;
        padding-left: 50px
      }
      table {
          border-collapse: collapse;
      }

      tr {
          border-bottom: 1px solid #eef0f3;
          border:1px solid black;
      }
      tbody tr td {
          padding: 10px 15px;
          border:1px solid black;
      }
    </style>
  </head>

  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper" id="showdoc">
        <div align="center" style="padding-top:50px;">
            <table style="border:1px solid black;">
                <tr style="background-color: white;">
                    <th style="padding:10px; border:1px solid black;">Doctor Name</th>
                    <th style="padding:10px; border:1px solid black;">Phone</th>
                    <th style="padding:10px; border:1px solid black;">Speciality</th>
                    <th style="padding:10px; border:1px solid black;">Room No</th>
                    <th style="padding:10px; border:1px solid black;">Image</th>
                    <th style="padding:10px; border:1px solid black;">Action</th>
                  </tr>

                @foreach ($data as $doctor)
                      
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
                @endforeach
            </table>
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