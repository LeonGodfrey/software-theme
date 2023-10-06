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
                            <h1 class="m-0">Branches</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_branch.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Branch
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
                                                                <input type="search" class="form-control form-control-md" placeholder="Enter branch name" value="">

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
                            <!-- Default box -->
                            <div class="card card-solid">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="disburesed_loan.php">
                                                <h5><b>Kamuli Branch - KML</b></h5>
                                            </a>
                                            <p class="p-0"> <a href="mailto:kamuli@microfin-ug.com">kamuli@microfin-ug.com</a> | +256775313772</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-right">Saza Rd Opp Kamuli Township Primary School</p>
                                            <p class="text-right">Jinja, Kamuli, Uganda</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="disburesed_loan.php">
                                                <h5><b>Pallisa Branch - PB</b></h5>
                                            </a>
                                            <p class="p-0"> <a href="mailto:pallisa@microfin-ug.com">pallisa@microfin-ug.com</a> | +256775313772</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-right">Pallisa Town, Opposite Centenary Bank</p>
                                            <p class="text-right">Pallisa, Pallisa, Uganda</p>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="disburesed_loan.php">
                                                <h5><b>Masaka Branch - MSK</b></h5>
                                            </a>
                                            <p class="p-0"> <a href="mailto:masaka@microfin-ug.com">masaka@microfin-ug.com</a> | +256775313772</p>
                                        </div>
                                        <div class="col-6">
                                            <p class="text-right">SWICO House, Opp Masaka Central Market Masaka City</p>
                                            <p class="text-right">MASAKA, MASAKA, Uganda
                                            </p>
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