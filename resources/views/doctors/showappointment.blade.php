<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
    <style>
      #show_appt{
        width: 100%;
        margin: 30px 30px 0 30px;
        overflow: auto;
        background-image: url("../assets/img/showbg.jpg");
        color: black;
        border-radius: 8px;
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
        <!-- partial:partials/_navbar.html -->

       @include('admin.navbar')

       <div class="container-fluid page-body-wrapper" id="show_appt">
         <div align="center" style="padding-top:100px;">
          <table>
            <tr style="background-color: rgb(216, 211, 202);">
              <th style="padding:10px; border:1px solid black;">Customer Name</th>
              <th style="padding:10px; border:1px solid black;;">Email</th>
              <th style="padding:10px; border:1px solid black;;">Phone</th>
              <th style="padding:10px; border:1px solid black;;">Doctor Name</th>
              <th style="padding:10px; border:1px solid black;;">Date</th>
              <th style="padding:10px; border:1px solid black;;">Message</th>
              <th style="padding:10px; border:1px solid black;;">Status</th>
              <th style="padding:10px; border:1px solid black;;">Approved</th>
              <th style="padding:10px; border:1px solid black;;">Cancelled</th>
            </tr>

            @foreach ($data as $appoint )
              
              <tr align="center" style="background-color: skyblue;">
                <td>{{ $appoint->name }}</td>
                <td>{{ $appoint->email }}</td>
                <td>{{ $appoint->phone }}</td>
                <td>{{ $appoint->doctor }}</td>
                <td>{{ $appoint->date }}</td>
                <td>{{ $appoint->message }}</td>
                <td>{{ $appoint->status }}</td>
                <td>
                  <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                </td>
                <td>
                  <a class="btn btn-danger" href="{{ url('cancelled',$appoint->id) }}">Cancelled</a>
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