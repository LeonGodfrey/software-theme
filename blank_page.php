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
              <h1 class="m-0">Update Password</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <!-- <li class="breadcrumb-item active">Update Password</li> -->
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
        <div class="container mt-4">
    <h1>Export Table as CSV and PDF</h1>
    <button id="exportCSV" class="btn btn-primary">Export as CSV</button>
    <button id="exportPDF" class="btn btn-primary">Export as PDF</button>
</div>
        <table id="example" class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>John Doe</td>
            <td>johndoe@example.com</td>
        </tr>
        <!-- Add more rows as needed -->
    </tbody>
</table>

          
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include 'partials/footer.php'; ?>
  </div>
  <!-- ./wrapper -->
  <?php include 'partials/foot.php'; ?>