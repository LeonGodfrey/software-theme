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
              <h1 class="m-0">New role</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
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
              <div class="card">
                <div class="card-body">
                  <form>
                    <div class="form-group">
                      <label for="roleName">Role Name:</label>
                      <input type="text" class="form-control" id="roleName" name="roleName" required>
                    </div>
                    <div class="form-group">
                      <label>Permission:</label>
                      <p>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="create">
                        <label class="custom-control-label" for="create">Create</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="view">
                        <label class="custom-control-label" for="view">View</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="edit">
                        <label class="custom-control-label" for="edit">Edit</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="delete">
                        <label class="custom-control-label" for="delete">Delete</label>
                      </div>
                      </p>
                    </div>
                    <div class="form-group">
                      <label>Resources:</label>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="settings">
                        <label class="custom-control-label" for="settings">Settings</label>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="client">
                          <label class="custom-control-label" for="client">Details</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="cash">
                          <label class="custom-control-label" for="cashAccount">Branches</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="roles">
                          <label class="custom-control-label" for="roles">roles</label>
                        </div>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="client">
                        <label class="custom-control-label" for="client">Clients</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="cash">
                        <label class="custom-control-label" for="cashAccount">Cash Account</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="transactions">
                        <label class="custom-control-label" for="transactions">Transactions</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="reports">
                        <label class="custom-control-label" for="reports">Reports</label>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="card-tools text-right">
                    <button name="submit" type="submit" class="btn btn-success">Create Role</button>
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
  </div>
  <!-- /.content-wrapper -->
  <?php include 'partials/footer.php'; ?>
  </div>
  <!-- ./wrapper -->
  <?php include 'partials/foot.php'; ?>