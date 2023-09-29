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
                            <h1 class="m-0">Refund</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                
                                <li class="breadcrumb-item"><a href="client.php">SSEGAWA GODFREY</a></li>
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
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-success"><b>Transactions</b></h4>
                                    <div class="card-tools">
                                        <p class="text-right"> Account Balance: <span class="text-success">UGX </span><b> 50,000</b></p>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-head-fixed">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Created at</th>
                                                <th>Date</th>
                                                <th>Transaction</th>
                                                <th class="text-nowrap">Account</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                                <th>Receipt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>7922951</td>
                                                <td>02/05/2023</td>
                                                <td>01/05/2023</td>
                                                <td>Savings Deposit</td>
                                                <td class="text-nowrap"> Arua-Branch - Cashier</br>
                                                    Refund
                                                </td>
                                                <td>50,000</br>
                                                    0
                                                </td>
                                                <td>0</br>
                                                    50,000
                                                </td>
                                                <td><button class="btn btn-success">Receipt</button></td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>7922951</td>
                                                <td>02/05/2023</td>
                                                <td>01/05/2023</td>
                                                <td>Savings Withdrawal</td>
                                                <td>Refund</br>
                                                    Arua-Branch - Cashier
                                                </td>
                                                <td>50,000</br>
                                                    0
                                                </td>
                                                <td>0</br>
                                                    50,000
                                                </td>
                                                <td><button class="btn btn-success">Receipt</button></td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>7922951</td>
                                                <td>02/05/2023</td>
                                                <td>01/05/2023</td>
                                                <td>Savings Deposit</td>
                                                <td class="text-nowrap"> Arua-Branch - Cashier</br>
                                                    Refund
                                                </td>
                                                <td>50,000</br>
                                                    0
                                                </td>
                                                <td>0</br>
                                                    50,000
                                                </td>
                                                <td><button class="btn btn-success">Receipt</button></td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>7922951</td>
                                                <td>02/05/2023</td>
                                                <td>01/05/2023</td>
                                                <td>Savings Withdrawal</td>
                                                <td>Refund</br>
                                                    Arua-Branch - Cashier
                                                </td>
                                                <td>50,000</br>
                                                    0
                                                </td>
                                                <td>0</br>
                                                    50,000
                                                </td>
                                                <td><button class="btn btn-success">Receipt</button></td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>7922951</td>
                                                <td>02/05/2023</td>
                                                <td>01/05/2023</td>
                                                <td>Savings Deposit</td>
                                                <td class="text-nowrap"> Arua-Branch - Cashier</br>
                                                    Refund
                                                </td>
                                                <td>50,000</br>
                                                    0
                                                </td>
                                                <td>0</br>
                                                    50,000
                                                </td>
                                                <td><button class="btn btn-success">Receipt</button></td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                <p class="card-title">Account Balanc: <span class="text-success">UGX </span><b> 50,000</b></p>
                                    <div class="card-tools text-right">
                                        <button class="btn btn-danger">Close Account</button>
                                        <button class="btn btn-default">Deleted Accounts</button>
                                    </div>                                
                                </div>
                                <!-- /.card-footer -->
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