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
                            <h1 class="m-0">Cash Book</h1>
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
                        <!-- filter -->
                        <div class="col-sm-12">
                            <div class="card card-outline card-success">

                                <!-- /.card-header -->
                                <div class="card-body pb-1 pt-1">
                                    <form action="enhanced-results.html">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Cash Accounts *</label>
                                                            <div class="input-group ">
                                                                <select class="select2" style="width: 100%;">
                                                                    <option>-- All Accounts</option>
                                                                    <option>Koboko-branch - Cashier</option>
                                                                    <option selected>Arua-branch - Cashier</option>
                                                                    <option>Gulu-branch - Cashier</option>
                                                                    <option>Hoima -branch - Cashier</option>
                                                                    <option>Nebbi-branch - Cashier</option>
                                                                    <option>Adjumani-branch - Cashier</option>
                                                                    <option>Masaka-branch - Cashier</option>
                                                                    <option>Iganga-branch - Cashier</option>
                                                                    <option>Mayuge-branch - Cashier</option>
                                                                    <option>Iganga -branch - Cashier</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Starting Date *</label>
                                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />
                                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label>Closing Date *</label>
                                                            <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                                <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1" />
                                                                <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label>Filter</label>
                                                            <input type="submit" class="btn bg-success form-control" value="Submit">
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
                            <div class="card card-outline card-success">
                                <div class="card-header">
                                    <h3 class="card-title text-success"><b>Nebbi-Branch - Cashier</b></h3>                                    
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table id="example1" class="table table-bordered table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Date</th>
                                                <th>Account</th>
                                                <th>Particulars</th>
                                                <th>Nature</th>
                                                <th>Debit</th>
                                                <th>Credit</th>
                                                <th>Balance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-nowrap">
                                                <td>01</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Nebbi Branch</td>
                                                <td class="text-nowrap">Opening Balance</td>
                                                <td class="text-nowrap">Cash Transfer</td>
                                                <td class="text-primary"><b>817,650</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>817,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>02</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Interest Short Term loan</br>
                                                Short Term Loan</td>
                                                <td class="text-nowrap">Ocwii Maurine - NEBB-LTL-050-STL-034</td>
                                                <td class="text-nowrap">Loan Payment</td>
                                                <td class="text-primary"><b>230,000	</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>1,047,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>03</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Refund</td>
                                                <td>Ocwii Maurine - NEBB-LTL-050-STL-034</td>
                                                <td>Savings Deposits</td>
                                                <td class="text-primary"><b>310,000	</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>1,357,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>04</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Interest Short Term loan</br>
                                                Short Term Loan</td>
                                                <td>Chanoroma Jane - NEBB-LTL-041-STL-044
</td>
                                                <td>Loan Payment</td>
                                                <td class="text-primary"><b>402,500</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>1,760,150</b></td>
                                            </tr>
                                            <tr>
                                                <td>05</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Refund</td>
                                                <td>Chanoroma Jane - NEBB-LTL-041-STL-044
</td>
                                                <td>Savings Deposits</td>
                                                <td class="text-primary"><b>47,500</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>1,807,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>06</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Interest Short Term loan</br>
                                                Short Term Loan</td>
                                                <td>Aciro Joice - NEBB-LTL-054-STL-079</td>
                                                <td>Loan Payment</td>
                                                <td class="text-primary"><b>300,000</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>2,107,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>07</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Interest Long Term loan</br>
                                                Long Term Loan</td>
                                                <td>Wanikane Vitale - NEBB-LTL-035-STL-050</td>
                                                <td>Loan Payment</td>
                                                <td class="text-primary"><b>128,000	</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>2,235,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>08</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Refund</td>
                                                <td>Wanikane Vitale - NEBB-LTL-035-STL-050</td>
                                                <td>Savings Deposits</td>
                                                <td class="text-primary"><b>192,000</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>2,427,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>09</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Refund</td>
                                                <td>Ocwii Maurine - NEBB-LTL-050-STL-034</td>
                                                <td>Savings Withdrawals</td>
                                                <td class="text-primary"><b>0</b></td>
                                                <td class="text-danger"><b>310,000</b></td>
                                                <td class="text-primary"><b>2,117,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">
                                                    Long Term Loan</td>
                                                <td>Ocwii Maurine - NEBB-LTL-050-STL-034</td>
                                                <td>Loan Payment</td>
                                                <td class="text-primary"><b>372,000</b></td>
                                                <td class="text-danger"><b>0</b></td>
                                                <td class="text-primary"><b>2,489,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">
                                                Short Term Loan</td>
                                                <td>Ocwii Maurine - NEBB-LTL-050-STL-034</td>
                                                <td>Loan Disbursement</td>
                                                <td class="text-primary"><b>0</b></td>
                                                <td class="text-danger"><b>130,000</b></td>
                                                <td class="text-primary"><b>2,359,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">
                                                Airtime</td>
                                                <td>Airtel corporate</td>
                                                <td>Expense</td>
                                                <td class="text-primary"><b>0</b></td>
                                                <td class="text-danger"><b>30,000</b></td>
                                                <td class="text-primary"><b>2,359,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">
                                                Airtime</td>
                                                <td>Airtel corporate</td>
                                                <td>Expense</td>
                                                <td class="text-primary"><b>0</b></td>
                                                <td class="text-danger"><b>40,000</b></td>
                                                <td class="text-primary"><b>2,359,650</b></td>
                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td class="text-nowrap">2023-06-23</td>
                                                <td class="text-nowrap">Nebbi Branch</td>
                                                <td>Closing Balance</td>
                                                <td>Cash Transfer</td>
                                                <td class="text-primary"><b>0</b></td>
                                                <td class="text-danger"><b>2,359,650</b></td>
                                                <td class="text-primary"><b>0</b></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                        <tr class="text-nowrap">
                                                <td colspan="5"><b>Cash Account: </b>Nebbi Branch-Cashier</td>
                                                <th class="text-primary">2,799,650</th>
                                                <th class="text-danger">2,799,650</th>
                                                <th class="text-primary">0</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
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