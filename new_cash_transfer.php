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
                            <h1 class="m-0">New Cash Transfer</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item active">Update Password</li> -->
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
                            <form action="loan_appraisal.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <form>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="sourceAccount">Source Account:</label>
                                                    <select class="form-control select2" id="sourceAccount" name="sourceAccount" required>
                                                        <option value="account1">Account 1</option>
                                                        <option value="account2">Account 2</option>
                                                        <option value="account3">Account 3</option>
                                                        <!-- Add more account options here -->
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="transferAmount">Transfer Amount:</label>
                                                    <input type="text" class="form-control" id="transferAmount" name="transferAmount" required>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="destinationAccount">Destination Account:</label>
                                                    <select class="form-control select2" id="destinationAccount" name="destinationAccount" required>
                                                        <option value="account1">Account 1</option>
                                                        <option value="account2">Account 2</option>
                                                        <option value="account3">Account 3</option>
                                                        <!-- Add more account options here -->
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="description">Description:</label>
                                                    <textarea class="form-control" id="description" name="description" rows="2" required></textarea>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Transaction Date*</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div> 
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required>
                                                    </div>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="receiptNumber">Receipt Number:</label>
                                                    <input type="text" class="form-control" id="receiptNumber" name="receiptNumber">
                                                </div>
                                                </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Transfer Funds</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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