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
                            <h1 class="m-0">Loan Payment</h1>
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
                        <div class="col-12">
                            <div class="form-group">
                                <div role="group" class="btn-group">
                                    <ul class="nav">
                                        <li>
                                            <a href="loan_disbursed.php" class="btn btn-default btn-info pl-5 pr-5">Loan Details</a>
                                        </li>
                                        <li>
                                            <a href="pending_approval.php" class="btn btn-default btn-info pl-5 pr-5">Loan Schedule</a>
                                        </li>
                                        <li>
                                            <a href="approved.php" class="btn btn-default btn-info pl-5 pr-5">Loan Ledger</a>
                                        </li>
                                        <li>
                                            <a href="disbursed.php" class="btn btn-info pl-5 pr-5">Make A Payment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- installment details -->
                        <div class="col-sm-12">
                            <div class="card">
                            <div class="card-header">
                                    <h4 class="card-title text-success"><b>INSTALLMENTS IN ARREARS</b></h4>
                                </div>
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th class="text-nowrap">Due Date</th>
                                                <th>Principal</th>
                                                <th>Interest</th>
                                                <th>Penalties</th>
                                                <th>Installment Due</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-nowrap">
                                                <td>29-09-2023</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>
                                                <td>185,000</td>
                                            </tr>
                                            <tr>
                                                <td>29-10-2023</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>
                                                <td>185,000</td>
                                            </tr>
                                        <tfoot>
                                            <tr>
                                                <th>Total Due</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th>370,000</th>
                                            </tr>
                                        </tfoot>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- payment form -->
                        <div class="col-sm-12">
                            <div class="card">
                                <form enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Total Amount Recieved*</label>
                                                    <input name="amount" type="number" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Principal Recieved*</label>
                                                    <input name="amount" type="number" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Interest Recieved*</label>
                                                    <input name="amount" type="number" class="form-control" id="">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Penalties Recieved</label>
                                                    <input name="amount" type="number" class="form-control" id="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Transaction Date*</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="full_name">Reciept Number</label>
                                                    <input type="text" class="form-control" id="" name="full_name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Make Payment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- payment history -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-success"><b>PAYMENT HISTORY FOR SSEGAWA GODFREY</b></h4>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Date Paid</th>
                                                <th>Total Paid</th>
                                                <th>Principal</th>
                                                <th>Interest</th>
                                                <th>Penalties</th>
                                                <th>Receipt</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>79229</td>
                                                <td>29-09-2023</td>
                                                <td>185,000</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>
                                                <td><button class="btn btn-xs btn-success">Receipt</button></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>79229</td>
                                                <td>29-09-2023</td>
                                                <td>185,000</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>
                                                <td><button class="btn btn-xs btn-success">Receipt</button></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>79229</td>
                                                <td>29-09-2023</td>
                                                <td>185,000</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>
                                                <td><button class="btn btn-xs btn-success">Receipt</button></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>

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