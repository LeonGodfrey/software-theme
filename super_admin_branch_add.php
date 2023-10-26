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
                            <h1 class="m-0">New Branch</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="super_admin_branch_manage.php">Branches</a></li>
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
                                                <input type="text" class="form-control" id="branchName" name="branchName" placeholder="Enter branch name" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="branchPrefix">Branch Prefix:</label>
                                                <input type="text" class="form-control" id="branchPrefix" name="branchPrefix" placeholder="Enter branch prefix" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="emailAddress">Email Address:</label>
                                                <input type="email" class="form-control" id="emailAddress" name="emailAddress" placeholder="Enter email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="branchContact">Branch Contact:</label>                                                
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                    </div>
                                                    <input type="text" class="form-control" id="branchContact" name="branchContact" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="streetAddress">Street Address:</label>
                                                <input type="text" class="form-control" id="streetAddress" name="streetAddress" placeholder="Enter street address" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="city">City:</label>
                                                <input type="text" class="form-control" id="city" name="city" placeholder="Enter city" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="district">District:</label>
                                                <input type="text" class="form-control" id="district" name="district" placeholder="Enter district" required>
                                            </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Register Branch</button>
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