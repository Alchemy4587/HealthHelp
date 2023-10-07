
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h4 class="font-weight-bold mb-0">Doctor Dashboard</h4>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Today's Patients</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">231</h3>
              <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>  
            <p class="mb-0 mt-2 text-primary">18% <span class="text-black ms-1"><p>Higher Than Last Month</p></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Appointments</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">122</h3>
              <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>  
            <p class="mb-0 mt-2 text-primary">21% <span class="text-black ms-1"><p>Higher Than Last Month</p></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Today's Operations</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">28</h3>
              <i class="ti-cut icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div>  
            <p class="mb-0 mt-2 text-primary">37% <span class="text-black ms-1"><p>Higher Than Last Month</p></span></p>
          </div>
        </div>
      </div>
      <div class="col-md-3 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title text-md-center text-xl-left">Online Appointment</p>
            <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
              <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">42</h3>
              <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
            </div> 
            <p class="mb-0 mt-2 text-primary">10% <span class="text-black ms-1"><p>Higher Than Last Month</p></span></p>
          </div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title">Patiets Survey</p>
            <p class="text-muted font-weight-light">Blue For New Patients and Light Blue for Old Patients</p>
            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
            <canvas id="sales-chart"></canvas>
          </div>
          <div class="card border-right-0 border-left-0 border-bottom-0">
            <div class="d-flex justify-content-center justify-content-md-end">
              <div class="dropdown flex-md-grow-1 flex-xl-grow-0">
                <button class="btn btn-lg btn-outline-light dropdown-toggle rounded-0 border-top-0 border-bottom-0" type="button" id="dropdownMenuDate2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                  Today
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate2">
                  <a class="dropdown-item" href="#">January - March</a>
                  <a class="dropdown-item" href="#">March - June</a>
                  <a class="dropdown-item" href="#">June - August</a>
                  <a class="dropdown-item" href="#">August - November</a>
                </div>
              </div>
              <button class="btn btn-lg btn-outline-light text-primary rounded-0 border-0 d-none d-md-block" type="button"> View all </button>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6 grid-margin stretch-card">
        <div class="card border-bottom-0">
          <div class="card-body pb-0">
            <p class="card-title">Appointment Review</p>
            <p class="text-muted font-weight-light">Graphical Overview of Appointments Statistics</p>
            <div class="d-flex flex-wrap mb-5">
              <div class="me-5 mt-3">
                <p class="text-muted">Total</p>
                <h3>362</h3>
              </div>
              <div class="me-5 mt-3">
                <p class="text-muted">Face-To-Face</p>
                <h3>187</h3>
              </div>
              <div class="me-5 mt-3">
                <p class="text-muted">E-Consult</p>
                <h3>524</h3>
              </div>
              <div class="mt-3">
                <p class="text-muted">Available</p>
                <h3>509</h3>
              </div> 
            </div>
          </div>
          <canvas id="order-chart" class="w-100"></canvas>
        </div>
      </div>
    </div>

    <!--
    <div class="row">
      <div class="col-md-7 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <p class="card-title mb-0">Top Products</p>
            <div class="table-responsive">
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>User</th>
                    <th>Product</th>
                    <th>Sale</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Jacob</td>
                    <td>Photoshop</td>
                    <td class="text-danger"> 28.76% <i class="ti-arrow-down"></i></td>
                    <td><label class="badge badge-danger">Pending</label></td>
                  </tr>
                  <tr>
                    <td>Messsy</td>
                    <td>Flash</td>
                    <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                    <td><label class="badge badge-warning">In progress</label></td>
                  </tr>
                  <tr>
                    <td>John</td>
                    <td>Premier</td>
                    <td class="text-danger"> 35.00% <i class="ti-arrow-down"></i></td>
                    <td><label class="badge badge-info">Fixed</label></td>
                  </tr>
                  <tr>
                    <td>Peter</td>
                    <td>After effects</td>
                    <td class="text-success"> 82.00% <i class="ti-arrow-up"></i></td>
                    <td><label class="badge badge-success">Completed</label></td>
                  </tr>
                  <tr>
                    <td>Dave</td>
                    <td>53275535</td>
                    <td class="text-success"> 98.05% <i class="ti-arrow-up"></i></td>
                    <td><label class="badge badge-warning">In progress</label></td>
                  </tr>
                  <tr>
                    <td>Messsy</td>
                    <td>Flash</td>
                    <td class="text-danger"> 21.06% <i class="ti-arrow-down"></i></td>
                    <td><label class="badge badge-info">Fixed</label></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-5 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">To Do Lists</h4>
            <div class="list-wrapper pt-2">
              <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Become A Travel Pro In One Easy Lesson
                    </label>
                  </div>
                  <i class="remove ti-trash"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      See The Unmatched Beauty Of The Great Lakes
                    </label>
                  </div>
                  <i class="remove ti-trash"></i>
                </li>
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Copper Canyon
                    </label>
                  </div>
                  <i class="remove ti-trash"></i>
                </li>
                <li class="completed">
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox" checked>
                      Top Things To See During A Holiday In Hong Kong
                    </label>
                  </div>
                  <i class="remove ti-trash"></i>
                </li>
                <li>
                  <div class="form-check form-check-flat">
                    <label class="form-check-label">
                      <input class="checkbox" type="checkbox">
                      Travelagent India
                    </label>
                  </div>
                  <i class="remove ti-trash"></i>
                </li>
              </ul>
            </div>
            <div class="add-items d-flex mb-0 mt-4">
              <input type="text" class="form-control todo-list-input me-2"  placeholder="Add new task">
              <button class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i class="ti-location-arrow"></i></button>
            </div>
          </div>
        </div>
      </div>
    </div>-->
    <div class="row">
      <div class="col-md-12 grid-margin stretch-card">
        <div class="card position-relative">
          <div class="card-body">
            <p class="card-title">Detailed Reports</p>
            <div class="row">
              <div class="col-md-12 col-xl-3 d-flex flex-column justify-content-center">
                <div class="ml-xl-4">
                  <h1>335</h1>
                  <h3 class="font-weight-light mb-xl-4">Successful Book Appointments</h3>
                  <p class="text-muted mb-2 mb-xl-0">The total number of sessions within the date range. It is the period time a user is actively engaged with the application</p>
                </div>  
              </div>
              <div class="col-md-12 col-xl-9">
                <div class="row">
                  <div class="col-md-6 mt-3 col-xl-5">
                    <canvas id="north-america-chart"></canvas>
                    <div id="north-america-legend"></div>
                  </div>

                  <div class="col-md-6 col-xl-7">
                    <div class="table-responsive mb-3 mb-md-0">
                      <table class="table table-borderless report-table">
                        <tr>
                          <td class="text-muted">January</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">210</h5></td>
                        </tr>
                        <tr>
                          <td class="text-muted">Febuary</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">320</h5></td>
                        </tr>
                        <tr>
                          <td class="text-muted">March</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">410</h5></td>
                        </tr>
                        <tr>
                          <td class="text-muted">April</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">195</h5></td>
                        </tr>
                        <tr>
                          <td class="text-muted">May</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">145</h5></td>
                        </tr>
                        <tr>
                          <td class="text-muted">June</td>
                          <td class="w-100 px-0">
                            <div class="progress progress-md mx-4">
                              <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                          </td>
                          <td><h5 class="font-weight-bold mb-0">300</h5></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content-wrapper ends -->
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <a href="#">HealthHelp</a>2023</span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">All Rights Reserved<a href="#" target="_blank"></a></span>
    </div>
  </footer>
  <!-- partial -->
</div>