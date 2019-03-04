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
                <h1> Orders Status List </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders Status List</li>
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
                                            <th>Order Status</th>
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
                                              <td><?php echo $order->mobile; ?></td>
                                              <td><?php echo $order->bag_type; ?></td>
                                              <td><?php echo $order->quantity; ?></td>
                                              <td>
                                                <p class="text-aqua">
                                                  <?php if ($order->status == 1) { ?>
                                                    <p class="text-success">  Active </p>
                                                  <?php } elseif ($order->status == 0) { ?>
                                                    <p class="text-warning"> Inactive </p>
                                                  <?php } elseif ($order->status == 2) { ?>
                                                    <p class="text-aqua"> Accepted </p>
                                                  <?php } elseif ($order->status == 3) { ?>
                                                    <p class="text-danger"> Rejected </p>
                                                  <?php } ?>
                                                </p>
                                              </td>
                                              <td class="valigntop">
                                                  <div class="btn-group">
                                                      <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="true"> Actions
                                                          <i class="fa fa-angle-down"></i>
                                                      </button>
                                                      <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                                          <li>
                                                              <a href=""><i class="fa fa-gift"></i>Packed</a>
                                                          </li>
                                                          <li>
                                                              <a href=""><i class="fa fa-truck"></i>Ready for Delivery</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </td>
                                          </tr>
                                          <?php $sno++; ?>
                                        <?php } ?>
                                      <?php } else { ?>
                                        <tr>
                                          <td colspan="8" class="text-center">No records found</td>
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
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>
