<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?></title>
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
                    Request List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Request</a></li>
                    <li class="active">Request List</li>
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
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Email</th>
                                            <th>Message</th>
                                            <th>Created On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($requests) > 0) { ?>
                                        <?php $count = 1; foreach ($requests as $r) { ?>
                                          <tr>
                                              <td><?php echo $count; ?></td>
                                              <td><?php echo $r->name; ?></td>
                                              <td><?php echo $r->mobile; ?></td>
                                              <td><?php echo $r->email; ?></td>
                                              <td><?php echo $r->message; ?></td>
                                              <td><?php echo date('d-m-Y H:i:s',strtotime($r->created_on)); ?></td>
                                          </tr>
                                        <?php $count++; } ?>
                                      <?php } else { ?>
                                        <tr>
                                          <td colspan='6' class="text-center">No records found</td>
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
      $(document).ready(function(){
          $('.confirmation').on('click', function () {
              return confirm('Are you sure of deleting category?');
          });
      });
      //datatables
      $(document).ready(function() {
          $('#example').DataTable();
      });
    </script>

</body>

</html>
