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
                            <h1 class="m-0">Roles</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <a href="new_role.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New role
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
                       <div class="col-sm-12">
                                <div class="card">
                                    
                                <div class="card-body table-responsive p-0">
                                <table class="table table-hover table-head-fixed table-sm">
                                        <thead>
                                            <tr class="text-nowrap">
                                                <th>ID</th>
                                                <th>Role</th> 
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="text-nowrap">
                                                <td>1</td>
                                                <td>Adminstrator</td>          
                                                <td><button class="btn btn-xs btn-success">Edit</button> <button class="btn btn-xs btn-danger">delete</button></td>
                                                <td></td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td>1</td>
                                                <td>Manager</td>          
                                                <td><button class="btn btn-xs btn-success">Edit</button> <button class="btn btn-xs btn-danger">delete</button></td>
                                                <td></td>
                                            </tr>
                                            <tr class="text-nowrap">
                                                <td>1</td>
                                                <td>Credit Officer</td>          
                                                <td><button class="btn btn-xs btn-success">Edit</button> <button class="btn btn-xs btn-danger">delete</button></td>
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