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
                            <h1 class="m-0">New Loan Product</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="org_loan_product.php">Loan Product</a></li>
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
                                                    <p class="text-sm">The loan product type. <b>Standard</b> for normal loans and <b>Assets</b> for asset loans.</p>
                                                    <select class="select2" style="width: 100%;">
                                                        <option selected>Standard</option>
                                                        <option>Asset</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Product Name *</label>
                                                    <p class="text-sm">The name of this Loan product.</p>
                                                    <input name="amount" type="text" class="form-control" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Interest Method *</label>
                                                    <p class="text-sm">The method used to accrue interest for this loan product.</p>
                                                    <select class="select2" style="width: 100%;">
                                                        <option selected>Flat</option>
                                                        <option>Declining Balance - Amortized</option>
                                                        <option>Declining Balance - Discounted</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Interest Rate(%)</label>
                                                    <p class="text-sm">Periodic interest rate based on the repayment frequency.></p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Payment Frequency *</label>
                                                    <p class="text-sm">The period between dates in which the borrower must make loan installment repayments.</p>
                                                    <select class="select2" style="width: 100%;">
                                                        <option selected>Monthly</option>
                                                        <option>Daily</option>
                                                        <option>Weekly</option>
                                                        <option>Annually</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Penalty Rate(%) *</label>
                                                    <p class="text-sm">The proportion of the loan's principal and interest arrears that is charged at the penalty frequency.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Number of Grace Period Installments *</label>
                                                    <p class="text-sm">Installmentsthat will not contain any due principle.</b></p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Charge Interest on Grace Period Installments? *</label>
                                                    <p class="text-sm">This will only take effect if there is a grace period set above.</p>
                                                    <select class="select2" style="width: 100%;">
                                                        <option selected>No</option>
                                                        <option>Yes</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Arrears Maturity Period *</label>
                                                    <p class="text-sm">The period following a missed payment after which the loan will be considered in arrears.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label style="font-weight: normal;" for="purpose">Maximum Loan Period in months *</label>
                                                    <p class="text-sm">The longest period that can be give to a client in months.</p>
                                                    <input type="number" class="form-control" id="" name="purpose" value="0">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                        

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