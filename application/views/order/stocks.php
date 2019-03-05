<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?> </title>
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
                <h1> Handle Stock List </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stock List</li>
                    <li class="active">Handle Stock List</li>
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
                                            <th>Stock Name</th>
                                            <th>Material Type</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>GSM</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($stocks) > 0) { ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach ($stocks as $stock) { ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
                                              <td><?php echo $stock['stock_name']; ?></td>
                                              <td><?php echo $stock['mtype']; ?></td>
                                              <td><?php echo $stock['type']; ?></td>
                                              <td><?php echo $stock['size']; ?></td>
                                              <td><?php echo $stock['color']; ?></td>
                                              <td><?php echo $stock['gsm']; ?></td>
                                              <td><?php echo $stock['quantity']; ?></td>
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
