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
                            <h1 class="m-0">Loan Application</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="client.php">SSEGAWA GODFREY</a></li>
                                <li class="breadcrumb-item"><a href="clients.php">Clients</a></li>
                                <!-- <li class="breadcrumb-item active">SSEGAWA GODFREY</li> -->
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="ssegawa">
                                                <h5><b>SSEGAWA GODFREY - HM-LTL-200</b></h5>
                                            </a>
                                            <div class="dropdown-divider"></div>
                                            <p class="text-sm"><b>Phone:</b> +256753446252 <span class=" btn btn-info btn-xs">Send SMS</span> <br> <b>Alt Phone:</b> +2567000000 <br> <b>Email:</b> <a href="mailto:ssegodfrey171@gmail.com">ssegodfrey171.com</a></p>
                                            <p class="text-sm"><a href="new_client.php" class="btn-sm btn-success">View Info</a> | <a href="new_client.php" class="btn-sm btn-info">Edit Info</a></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-sm"><b>Address: </b>STREET ADDRESS, VILLAGE, DISTRICT</p>
                                            <p class="text-sm"><b>City</b> KAMPALA</p>
                                            <p class="text-sm"><b>Age:</b> 25 years <br> <b>Branch:</b> Mayuge</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-sm-12">
                            <form action="loan_appraisal.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title col-xs-6">Loan Application</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="branch">Branch *</label>
                                                    <select class="form-control" style="width: 100%;">
                                                        <option>Select Branch</option>
                                                        <option selected>Mayuge</option>
                                                        <option>Iganga</option>
                                                        <option>Pallisa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="loanProduct">Loan Product *</label>
                                                    <select class="form-control" style="width: 100%;">
                                                        <option>Select Loan Product</option>
                                                        <option selected>Corporate Short Loan</option>
                                                        <option>Long Term Loan</option>
                                                        <option>Short Term Loan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Loan Amount Applied For:*</label>
                                                    <input name="amount" type="text" class="form-control" value="1,000,000">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Repayment Period in Months*</label>
                                                    <input name="amount" type="number" class="form-control" value="8">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Purpose of the loan</label>
                                                    <input type="text" class="form-control" id="" name="purpose" value="Education">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Loan Application Date*</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Submit Application</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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