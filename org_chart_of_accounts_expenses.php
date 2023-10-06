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
              <h1 class="m-0">Chart Of Accounts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <a href="new_account.php" class="btn float-right bg-success"><i class="fa fa-plus"></i> New Account
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
                      <a href="org_chart_of_accounts_assets.php" class="btn btn-info">Assets</a>
                    </li>
                    <li>
                      <a href="org_chart_of_accounts_equity.php" class="btn btn-default btn-info">Equity</a>
                    </li>
                    <li>
                      <a href="org_chart_of_accounts_expenses.php" class="btn btn-default btn-info">Expenses</a>
                    </li>
                    <li>
                      <a href="org_chart_of_accounts_income.php" class="btn btn-default btn-info">Income</a>
                    </li>
                    <li>
                      <a href="org_chart_of_accounts_liabilities.php" class="btn btn-default btn-info">Liabilities</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <ul class="list-group" id="chartOfAccounts">
                        <li class="list-group-item" data-toggle="collapse" data-target="#assets">
                          Assets
                          <ul class="list-group collapse" id="assets">
                            <li class="list-group-item">Current Assets
                              <ul class="list-group">
                                <li class="list-group-item">Cash</li>
                                <li class="list-group-item">Accounts Receivable</li>
                                <li class="list-group-item">Inventory</li>
                              </ul>
                            </li>
                            <li class="list-group-item">Fixed Assets
                              <ul class="list-group">
                                <li class="list-group-item">Property, Plant, and Equipment</li>
                                <li class="list-group-item">Vehicles</li>
                                <li class="list-group-item">Machinery</li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="list-group-item" data-toggle="collapse" data-target="#liabilities">
                          Liabilities
                          <ul class="list-group collapse" id="liabilities">
                            <li class="list-group-item">Current Liabilities
                              <ul class="list-group">
                                <li class="list-group-item">Accounts Payable</li>
                                <li class="list-group-item">Short-Term Loans</li>
                              </ul>
                            </li>
                            <li class="list-group-item">Long-Term Liabilities
                              <ul class="list-group">
                                <li class="list-group-item">Mortgages</li>
                                <li class="list-group-item">Bonds</li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <!-- Add more categories as needed -->
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
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