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
                            <h1 class="m-0">New Savings Product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="org_savings_product.php">Savings Product</a></li>
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
                            <form action="loan_appraisal.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="Select Branch">Product Type *</label>
                                                    <p class="text-sm">A <b>Standard</b> savings product is your basic Savings account without the need for a fixed time period. A <b>Fixed</b> savings product account is a Fixed Deposit account where a client will store his/her money for a fixed period of time as it accrues interest.</p>
                                                    <select class="select2" style="width: 100%;">
                                                        <option selected>Standard</option>
                                                        <option>Fixed</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Product Name *</label>
                                                    <p class="text-sm">The name of this savings product. <br> <br> <br> </p>
                                                    <input name="amount" type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Opening Balance</label>
                                                    <p class="text-sm">The amount of money used to open the account.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Minimum Balance</label>
                                                    <p class="text-sm">The minimum amount of money an account can hold.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Deposit Fee</label>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Withdrawal Fee</label>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Monthly Charges</label>
                                                    <input type="number" class="form-control" id="" name="purpose" value="10">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Interest Rate(%)</label>
                                                    <p class="text-sm">The percentage rate of interest per annum that will be applied to accounts of this savings product for <b>fixed deposit saving.</b></p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Penalty Rate(%)</label>
                                                    <p class="text-sm">The proportion of the accumulated interest that is charged for early withdrawals from <b>fixed deposit accounts</b>.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="card-tools text-right">
                                                <button name="submit" type="submit" class="btn btn-success">Create Savings Product</button>
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