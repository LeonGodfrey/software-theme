<?php include 'partials/head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">
    <?php include 'partials/navbar.php'; ?>
    <?php include 'partials/sidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper mi-bg">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Clients</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="new_client.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Client
              </a>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <!-- filter -->
            <div class="col-sm-12">
              <div class="card">
                <!-- /.card-header -->
                <div class="card-body pb-1">
                  <form action="enhanced-results.html">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <div class="input-group ">
                                <input type="search" class="form-control form-control-md" placeholder="Search Client by Name or Number" value="">

                              </div>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <select class="select2" style="width: 100%;">
                                <option selected>-- Filter by Branch</option>
                                <option>Mayuge</option>
                                <option>Gulu</option>
                                <option>Hoima</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-3">
                            <div class="form-group">
                              <button type="submit" class="btn bg-success" value="Search">Search</button>
                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- filter -->
            <div class="col-sm-12">
              <div class="card card-solid">
                <div class="card-body">
                  <div class="row">
                    <div class="col-6">
                      <a href="client.php">
                        <h5><b>SSEGAWA GODFREY</b> | HM-LTL-200-STL-103</h5>
                      </a>
                      <P>+256782167191</P>
                    </div>
                    <div class="col-5">
                      <p class="text-sm">NALUVULE M/C</p>
                      <p class="text-sm">NALUVULE | WAKISO | KAMPALA</p>
                    </div>
                    <div class="col-1 text-center">
                      <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail img-fluid mx-auto d-none d-md-block" style="width: 100%;">
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                    <div class="col-6">
                      <a href="client.php">
                        <h5><b>OPOLOT PETER</b> | PB-STL-544</h5>
                      </a>
                      <P>+256782167191</P>
                    </div>
                    <div class="col-5">
                      <p class="text-sm">KAGUMU</p>
                      <p class="text-sm">KAGUMU | KIKUBE | MBALE</p>
                    </div>
                    <div class="col-1 text-center">
                      <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail img-fluid mx-auto d-none d-md-block" style="width: 100%;">
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                    <div class="col-6">
                      <a href="client.php">
                        <h5><b>Client Name</b> | unique-no</h5>
                      </a>
                      <P>phone</P>
                    </div>
                    <div class="col-5">
                      <p class="text-sm">Street Address</p>
                      <p class="text-sm">Village | District | City</p>
                    </div>
                    <div class="col-1 text-center">
                      <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail img-fluid mx-auto d-none d-md-block" style="width: 100%;">
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                    <div class="col-6">
                      <a href="client.php">
                        <h5><b>Client Name</b> | unique-no</h5>
                      </a>
                      <P>phone</P>
                    </div>
                    <div class="col-5">
                      <p class="text-sm">Street Address</p>
                      <p class="text-sm">Village | District | City</p>
                    </div>
                    <div class="col-1 text-center">
                      <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail img-fluid mx-auto d-none d-md-block" style="width: 100%;">
                    </div>
                  </div>
                  <div class="dropdown-divider"></div>
                  <div class="row">
                    <div class="col-6">
                      <a href="client.php">
                        <h5><b>Client Name</b> | unique-no</h5>
                      </a>
                      <P>phone</P>
                    </div>
                    <div class="col-5">
                      <p class="text-sm">Street Address</p>
                      <p class="text-sm">Village | District | City</p>
                    </div>
                    <div class="col-1 text-center">
                      <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail img-fluid mx-auto d-none d-md-block" style="width: 100%;">
                    </div>
                  </div>
                </div>

                <!-- /.card-body -->
              </div>
              <div class="pb-2">
                <nav aria-label="Contacts Page Navigation">
                  <ul class="pagination m-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                    <li class="page-item"><a class="page-link" href="#">8</a></li>
                  </ul>
                </nav>
              </div>
            </div>
          </div><!-- /.main-row -->
        </div>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include 'partials/footer.php'; ?>
  </div>
  <!-- ./wrapper -->
  <?php include 'partials/foot.php'; ?>