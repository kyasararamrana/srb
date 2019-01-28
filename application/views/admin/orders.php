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
                    Order List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Order</a></li>
                    <li class="active">Order List</li>
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
                                            <th>Order ID</th>
                                            <th>Product Name</th>
                                            <th>Product Image</th>
                                            <th>Actual Price</th>
                                            <th>Discount%</th>
                                            <th>Net Price</th>
                                            <th>Status</th>
                                            <th>Created On</th>
                                            <th>Updated On</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($orders) > 0) { ?>
                                        <?php $count = 1; foreach ($orders as $o) { ?>
                                          <tr>
                                              <td><?php echo $count; ?></td>
                                              <td><?php echo $o->order_number; ?></td>
                                              <td><?php echo $o->product_name; ?></td>
                                              <td>
                                                <?php if (!empty($o->product_image) && file_exists('assets/uploads/product/'.$o->product_image)) { ?>
                                                  <img src="<?php echo base_url('assets/uploads/product/'.$o->product_image); ?>" width="100px" height="auto">
                                                <?php } ?>
                                              </td>
                                              <td><?php echo number_format($o->actual_price,2,'.',','); ?></td>
                                              <td><?php echo $o->discount_percentage; ?></td>
                                              <td><?php echo number_format($o->net_price,2,'.',','); ?></td>
                                              <td><?php echo $o->status; ?></td>
                                              <td><?php echo date('d-m-Y H:i:s',strtotime($o->created_on)); ?></td>
                                              <td><?php echo date('d-m-Y H:i:s',strtotime($o->created_on)); ?></td>
                                          </tr>
                                        <?php $count++; } ?>
                                      <?php } else { ?>
                                        <tr>
                                          <td colspan='10' class="text-center">No records found</td>
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
