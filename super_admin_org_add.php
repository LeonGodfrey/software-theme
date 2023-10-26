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
                            <h1 class="m-0">New Organization</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="super_admin_org_manage.php">Organizations</a></li>
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
                                        <div class="form-group">
                                            <label for="orgName">Organization Name:</label>
                                            <input type="text" class="form-control" id="orgName" name="orgName" placeholder="Enter organization name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="country">Country:</label>
                                            <input type="text" class="form-control" id="country" name="country" placeholder="Enter country" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="currencyCode">Currency Code:</label>
                                            <input type="text" class="form-control" id="currencyCode" name="currencyCode" placeholder="Enter currency code" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="incorporationDate">Incorporation Date:</label>
                                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                </div>
                                                <input id="incorporationDate" name="incorporationDate" type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="registrationNumber">Business Registration Number:</label>
                                            <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" placeholder="Enter registration number" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="managerName">Manager Name:</label>
                                            <input type="text" class="form-control" id="managerName" name="managerName" placeholder="Enter manager name" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="managerContact">Manager Contact:</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                </div>
                                                <input type="text" class="form-control" id="managerContact" name="managerContact" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="orgLogo">Organization Logo (File):</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="orgLogo" name="orgLogo" required>
                                                <label class="custom-file-label" for="orgLogo">Choose file</label>
                                            </div>
                                            <img id="logoPreview" class="mt-2" src="#" alt="Logo Preview" style="max-width: 100px; display: none;">
                                        </div>
                                        <script>
                                            // JavaScript to display image preview when a file is selected
                                            document.getElementById('orgLogo').addEventListener('change', function() {
                                                var input = this;
                                                var preview = document.getElementById('logoPreview');
                                                var file = input.files[0];
                                                var reader = new FileReader();

                                                reader.onload = function(e) {
                                                    preview.src = e.target.result;
                                                    preview.style.display = 'block';
                                                };

                                                reader.readAsDataURL(file);
                                            });
                                        </script>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <div class="card-tools text-right">
                                            <button name="submit" type="submit" class="btn btn-success">Register Organization</button>
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