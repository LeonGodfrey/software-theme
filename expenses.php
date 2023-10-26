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
                            <a href="new_expense.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Expense
                            </a>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
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
                                    <h4 class="card-title text-success"><b>Transactions</b></h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-head-fixed">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Txn Date</th>
                                                <th>Voucher No.</th>
                                                <th>Payment Method</th>
                                                <th>Description</th>
                                                <th class="text-nowrap">Affected Accounts</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>021</td>
                                                <td>27-06-2023</td>
                                                <td> </td>
                                                <td>Cash</td>
                                                <td>washing bikes</td>
                                                <td class="text-nowrap"> E.1.2.1.3 - Cleaning</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>6,000 <br>0
                                                </td>
                                                <td>0 </br>
                                                6,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>021</td>
                                                <td>27-06-2023</td>
                                                <td> </td>
                                                <td>Cash</td>
                                                <td>washing bikes</td>
                                                <td class="text-nowrap"> E.1.2.1.3 - Cleaning</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>6,000 <br>0
                                                </td>
                                                <td>0 </br>
                                                6,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>021</td>
                                                <td>27-06-2023</td>
                                                <td> </td>
                                                <td>Cash</td>
                                                <td>washing bikes</td>
                                                <td class="text-nowrap"> E.1.2.1.3 - Cleaning</br>
                                                Nebbi-Branch - Cashier
                                                </td>
                                                <td>6,000 <br>0
                                                </td>
                                                <td>0 </br>
                                                6,000
                                                </td>
                                                <td><button class="btn btn-danger">Reverse</button></td>
                                            </tr>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->                            
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