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
              <h1 class="m-0">New Savings Account</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item active"><a href="client.php">SSEGAWA GODFREY</a></li>
              <li class="breadcrumb-item"><a href="clients.php">Clients</a></li>
             
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="row">
                        <div class="col-sm-12">
                            <form action="#">
                                <div class="card">
                                    <form enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="SelectProduct">Savings Product *</label>
                                                        <select name="product" class="select2" style="width: 100%;">
                                                            <option selected>Select Product</option>
                                                            <option>Refund</option>
                                                            <option>Loan Guarantee Scheme</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="accountName">Account Name</label>
                                                        <input type="text" class="form-control" id="" placeholder="Account Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="deposit">Initial Deposit*</label>
                                                        <p class="text-sm">The amount of money the customer wants to make as their first deposit.</p>
                                                        <input name="initial_deposit" type="number" class="form-control" id="" >
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;">Opening Date*</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                            <input name="opening_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="card-tools text-right">
                                                <button name="submit" type="submit" class="btn btn-success">Create New Account</button>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>
          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'partials/footer.php'; ?>
  </div>
  <!-- ./wrapper -->
  <?php include 'partials/foot.php'; ?>