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
                <h1> Orders List </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders List</li>
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
                                    <th>Customer Name</th>
                                    <th>Bag Type</th>
                                    <th>Bag Size</th>
                                    <th>GSM</th>
                                    <th>Quantity</th>
                                    <th>Cost</th>
                                    <!-- <th>Advance</th> -->
                                    <th>Date</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <?php if (count($orders) > 0) { ?>
                                    <?php $sno = 1; ?>
                                    <?php foreach ($orders as $order) { ?>
                                      <tr>
                                        <td><?php echo $sno; ?></td>
                                        <td>
                                          <?php
                                            $str = date('Ymd').$order->id;
                                            echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                          ?>
                                        </td>
                                        <td><?php echo $order->customer_name; ?></td>
                                        <td><?php echo $order->bag_type; ?></td>
                                        <td><?php echo $order->bag_size; ?></td>
                                        <td><?php echo $order->bag_gsm; ?></td>
                                        <td><?php echo $order->quantity; ?></td>
                                        <td><?php echo $order->cost_per_kg; ?></td>
                                        <!-- <td>2000.00</td> -->
                                        <td><?php echo (isset($order->created_on)) ? date('Y-m-d H:i:s',strtotime($order->created_on)) : ''; ?></td>
                                        <td>
                                          <a href="<?php echo base_url('sales/details/'.$order->id); ?>" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-eye"></i></a>
                                          <a href="<?php echo base_url('sales/delete/'.$order->id); ?>" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
                                        </td>
                                        <?php $sno++; ?>
                                      </tr>
                                    <?php } ?>
                                    <?php } else { ?>
                                    <tr>
                                      <td colspan="11" class="text-center">No records found</td>
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
                return confirm('Are you sure of deleting Order?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
