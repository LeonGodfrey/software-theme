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
                            <h1 class="m-0">Nebbi-Branch - Cashier</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="cash_accounts.php">Cash Accounts</a></li>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-success"><b>Transactions</b></h4>
                                    <div class="card-tools">
                                        <p class="text-right">Account Balance: <span class="text-success">UGX </span><b>2,672,650</b></p>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table id="example3" class="table table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Created</th>
                                                <th>Txn Date</th>
                                                <th>Txn Nature</th>
                                                <th class="text-nowrap">Account</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>021</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Cash Account Transfers</td>
                                                <td class="text-nowrap"> Nebbi-Branch - Cashier</br>
                                                Nebbi Branch
                                                </td>
                                                <td>2,672,650
                                                </td>
                                                <td> </br>
                                                2,672,650
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>020</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Cash Account Transfers</td>
                                                <td class="text-nowrap">Nebbi Branch</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>2,672,650
                                                </td>
                                                <td> </br>
                                                2,672,650
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>019</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Cash Account Transfers</td>
                                                <td class="text-nowrap">Stanbic Nebbi</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>2,000,000
                                                </td>
                                                <td> </br>
                                                2,000,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>018</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Expense</td>
                                                <td class="text-nowrap">Staff Welfare</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>8,000
                                                </td>
                                                <td> </br>
                                                8,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>017</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Loan Disbursement</td>
                                                <td class="text-nowrap">Short Term Loan</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>50,000
                                                </td>
                                                <td> </br>
                                                50,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>016</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Other Income</td>
                                                <td class="text-nowrap">Nebbi-Branch - Cashier</br>
                                                Loan Processing Fees
                                                </td>
                                                <td>15,000
                                                </td>
                                                <td> </br>
                                                15,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>015</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Savings Deposits</td>
                                                <td class="text-nowrap">Cashier - Nebbi Branch</br>
                                                Refund
                                                </td>
                                                <td>436,600
                                                </td>
                                                <td> </br>
                                                436,600
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>015</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Loan Payment</td>
                                                <td class="text-nowrap">Cashier - Nebbi Branch</br>
                                                Interest Long Term Loan <br> Long Term Loan
                                                </td>
                                                <td>393,400	
                                                </td>
                                                <td> </br>
                                                60,000</br>333,400
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>015</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Loan Payment</td>
                                                <td class="text-nowrap">Cashier - Nebbi Branch</br>
                                                Short Term Loan
                                                </td>
                                                <td>240,000	
                                                </td>
                                                <td> </br>
                                                240,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>015</td>
                                                <td>27/06/2023</td>
                                                <td>26/06/2023</td>
                                                <td>Loan Payment</td>
                                                <td class="text-nowrap">Cashier - Nebbi Branch</br>
                                                Long Term Loan
                                                </td>
                                                <td>136,000	
                                                </td>
                                                <td> </br>
                                                136,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>                                               
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                <p class="card-title">Account Balanc:<span class="text-success"> UGX </span><b> 2,672,650</b></p>
                                </div>
                                <!-- /.card-footer -->
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