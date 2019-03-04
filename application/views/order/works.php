<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB |
        <?php echo $pageTitle; ?>
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php echo $links; ?>
</head>

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <?php echo $header; ?>
        <?php echo $sidebar; ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Machine Works List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Roll Management</li>
                    <li class="active">Works List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Duty</th>
                                            <th>Machine Name</th>
                                            <th>Process</th>
                                            <th>Start Date</th>
                                            <th>End Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($works) > 0) { ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach ($works as $work) { ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
                                              <td><?php echo $work->duty; ?></td>
                                              <td><?php echo $work->machine_name; ?></td>
                                              <td><?php echo $work->process; ?></td>
                                              <td>xxxxx</td>
                                              <td>xxxxx</td>
                                              <td>
                                                  <a href="#" class="text-green">Completed</a>
                                              </td>
                                              <td class="valigntop">
                                                  <div class="btn-group">
                                                      <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                          <i class="fa fa-angle-down"></i>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li>
                                                              <a href=""><i class="fa fa-refresh"></i>Pending</a>
                                                          </li>
                                                          <li>
                                                              <a href="#"><i class="fa fa-check-circle"></i>Completed</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <?php $sno++; ?>
                                        <?php } ?>
                                      <?php } else { ?>
                                        <tr>
                                          <td colspan="8" class="text-center">
                                            No records found
                                          </td>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php echo $footer; ?>
    </div>
    <!-- ./wrapper -->
    <?php echo $scripts; ?>

    <script type="text/javascript">
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting color?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>
