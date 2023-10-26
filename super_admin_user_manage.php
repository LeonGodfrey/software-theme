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
                            <h1 class="m-0">Users</h1>
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
                                            <a href="super_admin_org_manage.php" class="btn btn-default btn-info">Organizations</a>
                                        </li>
                                        <li>
                                            <a href="super_admin_branch_manage.php" class="btn btn-default btn-info">Branches</a>
                                        </li>
                                        <li>
                                            <a href="super_admin_user_manage.php" class="btn btn-info">Users</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
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
                                                                <input type="search" class="form-control form-control-md" placeholder="Search User by Name" value="">

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
                                    <h4 class="card-title text-success"><b>User</b></h4>
                                    <div class="card-tools">
                                        <a href="super_admin_user_add.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New User
                                        </a>
                                    </div>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body table-responsive p-0">
                                    <table class="table table-hover table-head-fixed">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Organization</th>
                                                <th>Branch</th>
                                                <th>Name</th>
                                                <th>UserName</th>
                                                <th>Role</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Created</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>021</td>
                                                <td>Microfin ltd</td>
                                                <td>Masaka</td>
                                                <td>Katamba Herman</td>
                                                <td>Katamba</td>
                                                <td>Admin</td>
                                                <td>+256753446252</td>
                                                <td>Katamba@microfin-ug</td>
                                                <td>01/01/2023</td>
                                                <td><button class="btn  btn-xs btn-info">Edit</button></td>
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