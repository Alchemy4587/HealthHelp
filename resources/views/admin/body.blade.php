<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-12 grid-margin stretch-card">
        <div class="card corona-gradient-card">
          
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">650</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Appointments</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">64</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Operations</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">129</h3>
                </div>
              </div>
              <div class="col-3">
                  <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">New Patients</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">XAF 5,500,000</h3>
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success ">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal">Earnings</h6>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Hospital Survey</h4>
            <canvas id="lineChart" style="height:250px"></canvas>
          </div>
        </div>
      </div>
      <div class="col-lg-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Common Diseases Report</h4>
            <canvas id="barChart" style="height:230px"></canvas>
          </div>
        </div>
      </div>
    </div>
    
    <!--
    <div class="row ">
      <div class="col-12 grid-margin" id="show_appt">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Appointments</h4>
            <div class="table-responsive">
              <table class="table">
                <thead>
                  <tr>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Doctor Name</th>
                    <th>Date</th>
                    <th>Message</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                
                {{-- @foreach ($data as $appoint ) 
                  <tbody>
                    <tr>  
                      <td>{{ $appoint->name }}</td> 
                      <td>{{ $appoint->email }}</td> 
                      <td>{{ $appoint->phone }}</td> 
                      <td>{{ $appoint->doctor }}</td> 
                      <td>{{ $appoint->date }}</td> 
                      <td>{{ $appoint->message }}</td> 
                      <td>{{ $appoint->status }}</td> 
                      <td>
                        <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                        <a class="btn btn-danger" href="{{ url('cancelled',$appoint->id) }}">Cancelled</a>
                      </td>
                    </tr>
                  </tbody>
                @endforeach --}}
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="col-lg-12 stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Appointments</h4>
          </p>
          <div class="table-responsive">
            <table class="table table-bordered table-contextual">
              <thead>
                <tr>
                  <th>Patient Name</th>
                  <th>Assigned Doctor</th>
                  <th> Date </th>
                  <th> Disease </th>
                  <th> Age </th>
                </tr>
              </thead>
              <tbody>
                <tr class="table-info">
                  <td> Westley A </td>
                  <td> Dr John Doe </td>
                  <td> 12/05/2023 </td>
                  <td> Fever </td>
                  <td> 30yrs</td>
                </tr>
                <tr class="table-warning">
                  <td> Stanley N </td>
                  <td> Dr Jacob Smith </td>
                  <td> 12/05/2023 </td>
                  <td> Malaria </td>
                  <td> 21yrs</td>
                </tr>
                <tr class="table-danger">
                  <td> Steve J </td>
                  <td> Dr Barry Allen </td>
                  <td> 12/07/2023 </td>
                  <td> Cancer </td>
                  <td> 28yrs</td>
                </tr>
                <tr class="table-success">
                  <td> Damon S </td>
                  <td> Dr Stefan S </td>
                  <td> 14/05/2023 </td>
                  <td> Diabetes </td>
                  <td> 30yrs</td>
                </tr>
                <tr class="table-primary">
                  <td> Stanley N </td>
                  <td> Dr Jacob Smith </td>
                  <td> 12/05/2023 </td>
                  <td> Fever </td>
                  <td> 30yrs</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
         
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © HealthHelp 2023</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Privacy Policy<a href="#"></a>Terms and Conditions</span>
    </div>
  </footer>
  <!-- partial -->
</div>