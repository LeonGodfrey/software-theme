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
                            <h1 class="m-0">Savings Products</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_savings_product.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Savings Product
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
                                            <a href="org_savings_product_edit.php">
                                                <h5><b>Loan Guarantee Scheme </b> - FOR STANDARD DEPOSIT TYPE ACCOUNTS</h5>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm"><b>Opening Balance:</b> 0 </p>
                                            <p class="text-sm"><b>Minimum Balance:</b> 0 </p>
                                            <p class="text-sm"><b>Withdrawal Fee:</b> 0 </p>                                            
                                        </div>
                                        <div class="col-6">
                                        <p class="text-sm"><b>Deposit Fee:</b> 0 </p>
                                            <p class="text-sm"><b>Monthly:</b> 0 </p>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-12">
                                            <a href="org_savings_product_edit.php">
                                                <h5><b>Refund </b> - FOR STANDARD DEPOSIT TYPE ACCOUNTS</h5>
                                            </a>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-sm"><b>Opening Balance:</b> 0 </p>
                                            <p class="text-sm"><b>Minimum Balance:</b> 0 </p>
                                            <p class="text-sm"><b>Withdrawal Fee:</b> 0 </p>                                            
                                        </div>
                                        <div class="col-6">
                                        <p class="text-sm"><b>Deposit Fee:</b> 0 </p>
                                            <p class="text-sm"><b>Monthly:</b> 0 </p>
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