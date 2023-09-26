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
                            <h1 class="m-0">New Client</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="clients.php">Clients</a></li>
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
                        <div class="col-sm-12">
                            <form action="#">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title text-success"><b>Client's Information</b></h4>
                                    </div>
                                    <!-- /.card-header -->
                                    <form enctype="multipart/form-data">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="Select Branch">Select Branch *</label>
                                                        <select class="select2" style="width: 100%;">
                                                            <option selected>Select Branch</option>
                                                            <option>Mayuge</option>
                                                            <option>Gulu</option>
                                                            <option>Hoima</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;">Registration Date* (DD-MM-YYYY)</label>
                                                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>    
                                                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" required="required" />                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="ipps">IPPS Number</label>
                                                        <input type="text" class="form-control" id="" placeholder="ipps number">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="card">Card Numbers*</label>
                                                        <input type="text" class="form-control" id="" placeholder="client's card numbers">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <h4 class="text-success">Personal Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="firstName">First Name*</label>
                                                        <input type="text" class="form-control" id="" name="firstName" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="lastName">Middle and Last Name*</label>
                                                        <input type="text" class="form-control" id="" name="lastName" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="gender">Gender*</label>
                                                        <select class="select2" style="width: 100%;">
                                                            <option selected>--Select Gender</option>
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;">Date of Birth*</label>
                                                        <div class="input-group date" id="reservationdate1" data-target-input="nearest">
                                                            <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate1" />
                                                            <div class="input-group-append" data-target="#reservationdate1" data-toggle="datetimepicker">
                                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <h4 class="text-success">Contact Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" class="form-label" for="phone">Phone number*</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">+256</span>
                                                            </div>
                                                            <input type="number" id="phone" class="form-control" placeholder="753446322">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" class="form-label" for="alternatePhone">Alternate Phone number</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">+256</span>
                                                            </div>
                                                            <input type="number" id="alternatePhone" class="form-control" placeholder="783446252">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="email">Email Address</label>
                                                        <input type="email" class="form-control" id="" name="email">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="streetAddress">Street Address*</label>
                                                        <input type="text" class="form-control" id="" name="streetAddress" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="city">City*</label>
                                                        <input type="text" class="form-control" id="" name="city" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="district">District*</label>
                                                        <input type="text" class="form-control" id="" name="district" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="county">County</label>
                                                        <input type="text" class="form-control" id="" name="county">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="subCounty">Sub County</label>
                                                        <input type="text" class="form-control" id="" name="subCounty" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="parish">Parish</label>
                                                        <input type="text" class="form-control" id="" name="parish">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="village">Village</label>
                                                        <input type="text" class="form-control" id="" name="village" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <h4 class="text-success">Permanent Residence Details</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="homeDistrict">Home District</label>
                                                        <input type="text" class="form-control" id="" name="homeDistrict">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="homeVillage">Home Village</label>
                                                        <input type="text" class="form-control" id="" name="homeVillage">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="nok">Next of Kin Name*</label>
                                                        <input type="text" class="form-control" id="" name="nok" placeholder="Next of Kin full name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" class="form-label" for="nokPhone">Next of Kin's Phone</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="father">Father's Name</label>
                                                        <input type="text" class="form-control" id="" name="father" placeholder="Father's full name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" class="form-label" for="fatherPhone">Father's Phone</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="mother">Mother's Name</label>
                                                        <input type="text" class="form-control" id="" name="mother" placeholder="mother's full name">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" class="form-label" for="motherPhone">Mother's Phone</label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                                            </div>
                                                            <input type="text" class="form-control" data-inputmask='"mask": "(+256) 999-999999"' data-mask>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-divider"></div>
                                            <h4 class="text-success">Identification</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="nin">National ID Number</label>
                                                        <input type="text" class="form-control" id="" name="nin" placeholder="E.g CM9805210W0H3L">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label style="font-weight: normal;" for="nin">Passport Photo</label>

                                                        <div class="custom-file">
                                                            <input type="file" class="custom-file-input" id="customFile">
                                                            <label class="custom-file-label" for="customFile">Choose Photo</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <div class="card-tools text-right">
                                                <button type="submit" class="btn btn-success">Create individual</button>
                                            </div>
                                        </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include 'partials/footer.php'; ?>
    </div>
    <!-- ./wrapper -->
    <?php include 'partials/foot.php'; ?>