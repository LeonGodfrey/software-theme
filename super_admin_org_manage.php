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
                            <h1 class="m-0">Organizations</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <!-- <li class="breadcrumb-item"><a href="cash_accounts.php">Cash Accounts</a></li> -->
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

                        <div class="col-12">
                            <div class="form-group">
                                <div role="group" class="btn-group">
                                    <ul class="nav">
                                        <li>
                                            <a href="super_admin_org_manage.php" class="btn btn-success">Organizations</a>
                                        </li>
                                        <li>
                                            <a href="super_admin_branch_manage.php" class="btn btn-default btn-success">Branches</a>
                                        </li>
                                        <li>
                                            <a href="super_admin_user_manage.php" class="btn btn-default btn-success">Users</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-sm-12">
                            <div class="card  card-outline card-success">
                                <div class="card-header">
                                    <h4 class="card-title text-success"><b>Organizations</b></h4>
                                    <div class="card-tools">
                                        <a href="super_admin_org_add.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Organization
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table id="example2" class="table table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Country</th>
                                                <th>Currency Code</th>
                                                <th>Manager Name</th>
                                                <th>Manager Contact</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>021</td>
                                                <td>Microfin ltd</td>
                                                <td>Uganda</td>
                                                <td>UGX</td>
                                                <td>Katamba</td>
                                                <td>+256753446252</td>
                                                <td>01/01/2023</td>
                                                <td><button class="btn btn-xs btn-info">Edit</button></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                        <!-- /.card-body -->
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