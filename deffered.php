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
                            <h1 class="m-0">Loans</h1>
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
                                            <a href="pending_appraisal.php" class="btn btn-info">Pending Appraisal</a>
                                        </li>
                                        <li>
                                            <a href="pending_approval.php" class="btn btn-default">Pending Approval</a>
                                        </li>
                                        <li>
                                            <a href="approved.php" class="btn btn-default btn-info">Approved</a>
                                        </li>
                                        <li>
                                            <a href="disbursed.php" class="btn btn-default btn-info">Disbursed</a>
                                        </li>
                                        <li>
                                            <a href="cleared.php" class="btn btn-default btn-info">Cleared</a>
                                        </li>
                                        <li>
                                            <a href="deffered.php" class="btn btn-default btn-info">Deffered</a>
                                        </li>
                                        <li>
                                            <a href="waived.php" class="btn btn-default btn-info">Waived-Off</a>
                                        </li>
                                        <li>
                                            <a href="written.php" class="btn btn-default btn-info">Written-off</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- filter -->
                        <div class="col-sm-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form action="enhanced-results.html">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="row">
                                                    <div class="col-md-9">
                                                        <div class="form-group">
                                                            <div class="input-group ">
                                                                <input type="search" class="form-control form-control-md" placeholder="Search Client by Name" value="">

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <button type="submit" class="btn bg-success" value="Search">Search</button>
                                                            <button type="clear" class="btn btn-default">Clear</button>
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
                            <!-- Default box -->
                            <div class="card card-solid">
                                <div class="card-body pb-0">
                                    <div class="row">
                                        <div class="col-12 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="ssegawa">
                                                                <h4>AMONGIN CHRISTINE - Trading/Business</h4>
                                                            </a>
                                                            <p class="text-sm">0000302044</p>
                                                            <h5>Long Term Loan</h5>
                                                        </div>
                                                        <div class="col-3">
                                                            <p>Applied May 12, 2023</p>
                                                            <p>Deffered May 8, 2023</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p class="text-success"><b>80,000/=</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="ssegawa">
                                                                <h4>AMONGIN CHRISTINE - Trading/Business</h4>
                                                            </a>
                                                            <p class="text-sm">0000302044</p>
                                                            <h5>Long Term Loan</h5>
                                                        </div>
                                                        <div class="col-3">
                                                            <p>Applied May 12, 2023</p>
                                                            <p>Deffered May 8, 2023</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p class="text-success"><b>80,000/=</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex align-items-stretch flex-column">
                                            <div class="card bg-light d-flex flex-fill">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-7">
                                                            <a href="ssegawa">
                                                                <h4>LWAYA JOSEPH - Education</h4>
                                                            </a>
                                                            <p class="text-sm">0000302046</p>
                                                            <h5>Short Term Loan</h5>
                                                        </div>
                                                        <div class="col-3">
                                                            <p>Applied May 24, 2023</p>
                                                            <p>Deffered May 8, 2023</p>
                                                        </div>
                                                        <div class="col-2 text-center">
                                                            <p class="text-success"><b>80,000/=</b></p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                <nav aria-label="Contacts Page Navigation">
                                        <ul class="pagination justify-content-center m-0">
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
                                <!-- /.card-footer -->
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