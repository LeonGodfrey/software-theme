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
                            <h1 class="m-0">New User</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="super_admin_user_manage.php">User</a></li>
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

                        <div class="col-sm-12">
                            <form action="loan_appraisal.php" enctype="multipart/form-data">
                                <div class="card">
                                    <div class="card-body">
                                        <form action="process_branch_registration.php" method="post">
                                            <div class="form-group">
                                                <label for="organization">Organization:</label>
                                                <select class="form-control" id="organization" name="organization" required>
                                                    <option value="org1">Organization 1</option>
                                                    <option value="org2">Organization 2</option>
                                                    <option value="org3">Organization 3</option>
                                                    <!-- Add more organization options here -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                <label for="branchName">Branch Name:</label>
                <select class="form-control" id="branchName" name="branchName" required>
                    <option value="branch1">Branch 1</option>
                    <option value="branch2">Branch 2</option>
                    <option value="branch3">Branch 3</option>
                    <!-- Add more branch options here -->
                </select>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter name" required>
            </div>
            <div class="form-group">
                <label for="userName">Username:</label>
                <input type="text" class="form-control" id="userName" name="userName" placeholder="Enter username" required>
            </div>
            <div class="form-group">
                <label for="role">Role:</label>
                <select class="form-control" id="role" name="role" required>
                    <option value="role1">Role 1</option>
                    <option value="role2">Role 2</option>
                    <option value="role3">Role 3</option>
                    <!-- Add more role options here -->
                </select>
            </div>
                                            <div class="form-group">
                                            <label for="phone">Phone:</label>                                               
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="phone" name="phone" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                                </div>
                                            </div>
                                            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Register User</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div><!-- /.main-row -->
                </div>
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->

        <!-- /.content-wrapper -->
        <?php include 'partials/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'partials/foot.php'; ?>