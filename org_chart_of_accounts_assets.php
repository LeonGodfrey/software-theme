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
                            <h1 class="m-0">Chart Of Accounts</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_account.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Account
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
                        <div class="col-12">
                            <div class="form-group">
                                <div role="group" class="btn-group">
                                    <ul class="nav">
                                        <li>
                                            <a href="org_chart_of_accounts_assets.php" class="btn btn-info">Assets</a>
                                        </li>
                                        <li>
                                            <a href="org_chart_of_accounts_equity.php" class="btn btn-default btn-info">Equity</a>
                                        </li>
                                        <li>
                                            <a href="org_chart_of_accounts_expenses.php" class="btn btn-default btn-info">Expenses</a>
                                        </li>
                                        <li>
                                            <a href="org_chart_of_accounts_income.php" class="btn btn-default btn-info">Income</a>
                                        </li>
                                        <li>
                                            <a href="org_chart_of_accounts_liabilities.php" class="btn btn-default btn-info">Liabilities</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <ul class="list-group">
                                                <li class="list-group-item">A. Assets
                                                    <ul class="list-group ml-4">
                                                        <li class="list-group-item">A.1 Current Assets
                                                            <ul class="list-group ml-4">
                                                                <li class="list-group-item">A.1.1 Cash at Hand
                                                                    <ul class="list-group ml-4">
                                                                        <li class="list-group-item">A.1.1.1 Mobile Money
                                                                            <ul class="list-group ml-4">
                                                                                <li class="list-group-item">A.1.1.1.1 MTN</li>
                                                                                <li class="list-group-item">A.1.1.1.2 MTN</li>
                                                                                <li class="list-group-item">A.1.1.1.3 SYSTEM ERROR RECONCILIATION ACCOUNT</li>
                                                                                <li class="list-group-item">A.1.1.1.4 Inter-Branch Transfers</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="list-group ml-4">
                                                                        <li class="list-group-item">A.1.1.2 User Cash Accounts
                                                                            <ul class="list-group ml-4">
                                                                                <li class="list-group-item">A.1.1.2.1 Nebbi-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.2.2 Arua-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.2.3 Koboko-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.2.4 Adjumani-Branch - Cashier</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                    <ul class="list-group ml-4">
                                                                        <li class="list-group-item">A.1.1.3 Vault Accounts
                                                                            <ul class="list-group ml-4">
                                                                                <li class="list-group-item">A.1.1.3.1 Nebbi-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.3.2 Arua-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.3.3 Koboko-Branch - Cashier</li>
                                                                                <li class="list-group-item">A.1.1.3.4 Adjumani-Branch - Cashier</li>
                                                                            </ul>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-group-item">Cash at Bank</li>
                                                                <li class="list-group-item">Recievables</li>
                                                                <li class="list-group-item">Loan Products</li>
                                                                <li class="list-group-item">Agency Banking</li>
                                                            </ul>
                                                        <li class="list-group-item">A.2 Non Current Assets</li>
                                                    </ul>
                                                </li>

                                            </ul>
                                            </li>
                                            </ul>
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