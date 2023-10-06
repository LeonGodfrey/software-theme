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
                            <h1 class="m-0">users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_user.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New user
                            </a>
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
                                            <a href="all_users.php" class="btn btn-info">All Users</a>
                                        </li>
                                        <li>
                                            <a href="enabled.php" class="btn btn-default btn-info">Enabled</a>
                                        </li>
                                        <li>
                                            <a href="disabled.php" class="btn btn-default btn-info">Disabled</a>
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
                                <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>Name</th>
                                                <th>Username</th> 
                                                <th>email</th>
                                                <th>phone</th> 
                                                <th>Role</th>
                                                <th>Branch</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-nowrap">
                                                <td><a href="new_user.php">Ssegawa Godfrey</a></td>
                                                <td>ssegawa</td> 
                                                <td><a href="mailto:ssegodfrey171@gmail.com">ssegodfrey171@gmail.com</a></td> 
                                                <td><a href="tel:+256 753446252">+256 753446252</a></td>
                                                <td><a href="role.php">Adminstrator</a></td>
                                                <td>Head Office</td>        
                                                <td><button class="btn btn-xs btn-danger">Disable</button></td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td><a href="new_user.php">Ssegawa Godfrey</a></td>
                                                <td>ssegawa</td> 
                                                <td><a href="mailto:ssegodfrey171@gmail.com">ssegodfrey171@gmail.com</a></td> 
                                                <td><a href="tel:+256 753446252">+256 753446252</a></td>
                                                <td><a href="role.php">Loan Officer</a></td>
                                                <td>Mayuge</td>        
                                                <td><button class="btn btn-xs btn-danger">Disable</button></td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td><a href="new_user.php">Ssegawa Godfrey</a></td>
                                                <td>ssegawa</td> 
                                                <td><a href="mailto:ssegodfrey171@gmail.com">ssegodfrey171@gmail.com</a></td> 
                                                <td><a href="tel:+256 753446252">+256 753446252</a></td>
                                                <td><a href="role.php">Loan Officer</a></td>
                                                <td>Gulu</td>        
                                                <td><button class="btn btn-xs btn-danger">Disable</button></td>
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