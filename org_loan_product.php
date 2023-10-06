<?php include 'partials/head.php'; ?>

<body class="hold-transition sidebar-mini layout-navbar-fixed">
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
                            <h1 class="m-0">Loan Products</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_loan_product.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Loan Product
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="org_loan_product_edit.php">
                                                <h5><b>Corporate Short Loan</b> - FIXED INTEREST</h5>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm"><b>Payment Frequency: </b><span class="text-success">Monthly</span> </p>
                                            <p class="text-sm"><b>Penalty Rate:</b> 0 </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm">Flat Interest of 15% applied Monthly</p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="org_loan_product_edit.php">
                                                <h5><b>Short Term Loan</b> - FIXED INTEREST</h5>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm"><b>Payment Frequency: </b><span class="text-success">Monthly</span> </p>
                                            <p class="text-sm"><b>Penalty Rate:</b> 0 </p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm">Flat Interest of 15% applied Monthly</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
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