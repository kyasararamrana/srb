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
                <h1> Confirm Orders </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Confirmation Orders</li>
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
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Bag Type</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php if (count($orders) > 0) { ?>
                                        <?php $sno = 1; ?>
                                        <?php foreach($orders as $order){ ?>
                                          <tr>
                                              <td><?php echo $sno; ?></td>
                                              <td><?php
                                                $str = date('Ymd').$order->id;
                                                echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                              ?></td>
                                              <td><?php echo $order->customer_name; ?></td>
                                              <td><?php echo $order->mobile; ?></td>
                                              <td><?php echo $order->bag_type; ?></td>
                                              <td><?php echo $order->quantity; ?></td>
                                              <td class="valigntop">
                                                  <div class="btn-group">
                                                      <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                          <i class="fa fa-angle-down"></i>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu">
                                                          <li>
                                                              <a href="<?php echo base_url('order/orderdetails/'.$order->id); ?>"><i class="fa fa-eye"></i>View</a>
                                                          </li>
                                                          <li>
                                                              <a class="status" href="<?php echo base_url('order/acceptstatus/'.$order->status.'/'.$order->id) ?>"><i class="fa fa-check"></i>Accept</a>
                                                          </li>
                                                          <li>
                                                              <a class="status" href="<?php echo base_url('order/rejectstatus/'.$order->status.'/'.$order->id) ?>"><i class="fa fa-close"></i>Reject</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <?php $sno++; ?>
                                        <?php } ?>
                                      <?php } else { ?>
                                        <tr colspan="7" class="text-center">
                                          <td >No records found</td>
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
                return confirm('Are you sure of deleting category?');
            });
            //status
            $('.status').on('click', function() {
                return confirm('Are you sure of change status?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
</body>
</html>
