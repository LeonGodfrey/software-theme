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
                            <h1 class="m-0">Disbursed Loan</h1>
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
                                            <a href="loan_disbursed.php" class="btn btn-info pl-5 pr-5">Loan Details</a>
                                        </li>
                                        <li>
                                            <a href="loan_schedule.php" class="btn btn-default btn-info pl-5 pr-5">Loan Schedule</a>
                                        </li>
                                        <li>
                                            <a href="loan_ledger.php" class="btn btn-default btn-info pl-5 pr-5">Loan Ledger</a>
                                        </li>
                                        <li>
                                            <a href="loan_payment.php" class="btn btn-default btn-info pl-5 pr-5">Make A Payment</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="ssegawa">
                                                <h5><b>SSEGAWA GODFREY - HM-LTL-200</b></h5>
                                            </a>
                                            <div class="dropdown-divider"></div>

                                            <p class="text-sm"><b>Phone:</b> +256753446252 <span class=" btn btn-info btn-xs">Send SMS</span> <br> <b>Alt Phone:</b> +2567000000 <br> <b>Email:</b> <a href="mailto:ssegodfrey171@gmail.com">ssegodfrey171.com</a></p>

                                            <p class="text-sm"><a href="new_client.php" class="btn-sm btn-success">View Info</a> | <a href="new_client.php" class="btn-sm btn-info">Edit Info</a></p>
                                        </div>
                                        <div class="col-4">
                                            <p class="text-sm"><b>Address: </b>STREET ADDRESS, VILLAGE, DISTRICT</p>
                                            <p class="text-sm"><b>City</b> KAMPALA</p>
                                            <p class="text-sm"><b>Age:</b> 25 years <br> <b>Branch:</b> Mayuge</p>
                                        </div>
                                        <div class="col-2 text-center">
                                            <img src="images/image1.jpg" alt="user-profile" class="img-thumbnail" style="width: 80%">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>

                        <div class="col-sm-12">
                            <form action="" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title text-bold col-xs-6">Loan Application Details</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="branch">Branch *</label>
                                                    <select class="form-control" style="width: 100%;" disabled>
                                                        <option>Select Branch</option>
                                                        <option selected>Mayuge</option>
                                                        <option>Iganga</option>
                                                        <option>Pallisa</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="loanProduct">Loan Product *</label>
                                                    <select class="form-control" style="width: 100%;" disabled>
                                                        <option>Select Loan Product</option>
                                                        <option selected>Corporate Short Loan</option>
                                                        <option>Long Term Loan</option>
                                                        <option>Short Term Loan</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Loan Amount Applied For:*</label>
                                                    <input name="amount" type="text" class="form-control" value="1,000,000" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Repayment Period in Months*</label>
                                                    <input name="amount" type="number" class="form-control" value="8" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="purpose">Purpose of the loan</label>
                                                    <input type="text" class="form-control" id="" name="purpose" value="Education" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Loan Application Date*</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" disabled>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <h5 class="text-bold">Loan Appraisal Details</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="LoanOfficer">Loan Officer *</label>
                                                    <select class="form-control" style="width: 100%;" disabled>
                                                        <option>Select Loan Officer</option>
                                                        <option selected>Kavuma Joshua</option>
                                                        <option>Kasule Ismeal</option>
                                                        <option>Acca Stella</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Loan Appraisal Date*</label>
                                                    <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Appraisal Loan Amount:*</label>
                                                    <input name="amount" type="text" class="form-control" value="1,000,000" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Appraisal Repayment Period*</label>
                                                    <input name="amount" type="number" class="form-control" value="8" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">
                                            <p class="text-sm">Attached Appraisal and other loan files, click on the thumbnail to view full image.</p>
                                                <div class="col-12">
                                                    <img src="images/appraisal1.jpg" class="product-image" alt="Product Image">
                                                </div>
                                                <div class="col-12 product-image-thumbs">
                                                    <div class="product-image-thumb active"><img src="images/appraisal1.jpg" alt="Product Image"></div>
                                                    <div class="product-image-thumb"><img src="images/security_1.jpeg" alt="Product Image"></div>
                                                    <div class="product-image-thumb"><img src="images/security2.jpeg" alt="Product Image"></div>
                                                    <div class="product-image-thumb"><img src="images/image1.jpg" alt="Product Image"></div>
                                                    <div class="product-image-thumb"><img src="images/image2.jpg" alt="Product Image"></div>
                                                    <div class="product-image-thumb"><img src="images/imag2.jpg" alt="Product Image"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="recommendation">Loan Officer Recommendation:*</label>
                                                    <input name="recommendation" type="text" class="form-control" value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <h5 class="text-bold">Loan Approval</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="LoanOfficer">Approved by: *</label>
                                                    <select class="form-control" style="width: 100%;" disabled>
                                                        <option>Select Loan Officer</option>
                                                        <option selected>Katamba Herman</option>
                                                        <option>Kasule Ismeal</option>
                                                        <option>Acca Stella</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Loan Approval Date*</label>
                                                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" disabled />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="amount">Approved Loan Amount:*</label>
                                                    <input name="amount" type="text" class="form-control" value="1,000,000" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Approved Repayment Period in months*</label>
                                                    <input name="amount" type="number" class="form-control" value="8" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="appraisal">Approval Interest Rate in Percentage (%)</label>
                                                    <input name="recommendation" type="number" class="form-control" value="6" disabled>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                <label style="font-weight: normal;" for="recommendation">Approval Comment:*</label>
                                                    <input name="recommendation" type="text" class="form-control" value="Good repayment record" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-divider"></div>
                                        <h5 class="text-bold">Loan Disbursement</h5>
                                        <div class="row">
                                        <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;" for="deposit">Disbusement Repayment Period*</label>
                                                    <input name="amount" type="number" class="form-control" value="8" disabled>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label style="font-weight: normal;">Loan Disbursement Date*</label>
                                                    <div class="input-group date" id="reservationdate2" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate2" data-toggle="datetimepicker">
                                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                        </div>
                                                        <input name="transaction_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate2"  disabled/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </form>
                        </div>                        
                        <!-- delete -->
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body pb-1">                                
                                    <form action=" ">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <p class="font-weight-bold">Loan Actions</p>
                                                <div class="card-tools text-sm">
                                                    <p> <span class="pr-5"><button name="submit" type="submit" class="btn btn-default">Waive Off Interest</button></span>
                                                    <button name="submit" type="submit" class="btn btn-default">Write Off</button></p>
                                                </div>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- delete -->
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
                                                <th>Principle</th>
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
                                                <td><button class="btn btn-xs btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>79229</td>
                                                <td>29-09-2023</td> 
                                                <td>185,000</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>                                          
                                                <td><button class="btn btn-xs btn-success">Receipt</button></td>
                                                <td><button class="btn btn-xs btn-danger">Reverse</button></td>
                                            </tr>
                                            <tr>
                                                <td>79229</td>
                                                <td>29-09-2023</td> 
                                                <td>185,000</td>
                                                <td>125,000</td>
                                                <td>60,000</td>
                                                <td>0</td>                                          
                                                <td><button class="btn btn-xs btn-success">Receipt</button></td>
                                                <td><button class="btn btn-xs btn-danger">Reverse</button></td>
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