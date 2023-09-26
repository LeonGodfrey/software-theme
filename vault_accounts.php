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
                            <h1 class="m-0">Cash Accounts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <div role="group" class="btn-group">
                                    <ul class="nav">
                                        <li>
                                            <a href="cash_accounts.php" class="btn btn-default btn-info">Cash Accounts</a>
                                        </li>
                                        <li>
                                            <a href="vault_accounts.php" class="btn btn-info">Vault Accounts</a>
                                        </li>
                                        <li>
                                            <a href="bank_accounts.php" class="btn btn-default btn-info">Bank Accounts</a>
                                        </li>
                                        <li>
                                            <a href="mobile_money_accounts.php" class="btn btn-default btn-info">Mobile Money Accounts</a>
                                        </li>                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- filter -->
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body pb-1">
                                    <form action="enhanced-results.html">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="input-group ">
                                                                <input type="search" class="form-control form-control-md" placeholder="Enter Account Name" value="">
                                                            </div>
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
                            <div class="card">
                                <div class="card-header">                                  
                                    <h3 class="card-title col-xs-6">Active Accounts | <a href="archived.php">Archived Accounts</a></h3>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="cash_account.php">
                                                <h4><b>Nebbi Branch</b></h4>
                                            </a>
                                        </div>
                                        <div class="col-6">                                            
                                            <p class="text-right text-success">Current Balance</p>
                                            <h5 class="text-right"><b><span class="text-success">UGX </span>0</b></h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="row">
                                    <div class="col-6">
                                            <a href="cash_account.php">
                                                <h4><b>Arua Branch</b></h4>
                                            </a>
                                        </div>
                                        <div class="col-6">                                            
                                            <p class="text-right text-success">Current Balance</p>
                                            <h5 class="text-right"><b><span class="text-success">UGX </span>0</b></h5>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="row">
                                    <div class="col-6">
                                            <a href="cash_account.php">
                                                <h4><b>Koboko Branch</b></h4>
                                            </a>
                                        </div>
                                        <div class="col-6">                                            
                                            <p class="text-right text-success">Current Balance</p>
                                            <h5 class="text-right"><b><span class="text-success">UGX </span>0</b></h5>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                    </div><!-- /.main-row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'partials/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'partials/foot.php'; ?>