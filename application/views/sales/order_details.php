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
                <h1> Order Details </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Confirmation Orders</a></li>
                    <li class="active">Order Details</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="bagForm" action="">
                                <div class="box-body">
                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Order Info</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Order ID</b></td>
                                                <td>
                                                  <?php
                                                    $str = date('Ymd').$order->id;
                                                    echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                                  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Quantity</b></td>
                                                <td><?php echo (isset($order->quality)) ? $order->quality : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Cost per Kg</b></td>
                                                <td><?php echo (isset($order->cost_per_kg)) ? $order->cost_per_kg : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Cost</b></td>
                                                <td><?php echo (isset($order->total_cost)) ? $order->total_cost : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Ordered Date</b></td>
                                                <td>
                                                  <?php
                                                    echo (isset($order->created_on)) ? date('Y-m-d H:i:s',strtotime($order->created_on)) : '-';
                                                  ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Customer Info</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Customer Name</b></td>
                                                <td><?php echo (isset($order->customer_name)) ? $order->customer_name : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Shop Name</b></td>
                                                <td><?php echo (isset($order->shop_name)) ? $order->shop_name : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td><?php echo (isset($order->customer_email)) ? $order->customer_email : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone Number</b></td>
                                                <td><?php echo (isset($order->mobile)) ? $order->mobile : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>GST / Aadhar Number</b></td>
                                                <td><?php echo (isset($order->gst_aadhar_number)) ? $order->gst_aadhar_number : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Shipping Address</b></td>
                                                <td><?php echo (isset($order->shipping_address)) ? $order->shipping_address : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>City</b></td>
                                                <td><?php echo (isset($order->city)) ? $order->city : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>State</b></td>
                                                <td><?php echo (isset($order->state)) ? $order->state : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Code</b></td>
                                                <td><?php echo (isset($order->zip_code)) ? $order->zip_code : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Charges</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Other Charges</b></td>
                                                <td><?php echo (isset($order->other_charges)) ? $order->other_charges : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Cost</b></td>
                                                <td><?php echo (isset($order->printing_cost)) ? $order->printing_cost : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Block Charges</b></td>
                                                <td><?php echo (isset($order->block_charges)) ? $order->block_charges : '' ; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Material Type</b></td>
                                                <td><?php echo (isset($order->material_type)) ? $order->material_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Quality</b></td>
                                                <td><?php echo (isset($order->quality)) ? $order->quality : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Type</b></td>
                                                <td><?php echo (isset($order->bag_type)) ? $order->bag_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Layout</b></td>
                                                <td><?php echo (isset($order->bag_layout)) ? $order->bag_layout : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Size</b></td>
                                                <td><?php echo (isset($order->bag_size)) ? $order->bag_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Color</b></td>
                                                <td><?php echo (isset($order->bag_color)) ? $order->bag_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag GSM</b></td>
                                                <td><?php echo (isset($order->bag_gsm)) ? $order->bag_gsm : '' ;  ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Handle Type</b></td>
                                                <td><?php echo (isset($order->handle_type)) ? $order->handle_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Material Type</b></td>
                                                <td><?php echo (isset($order->handle_material_type)) ? $order->handle_material_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Size</b></td>
                                                <td><?php echo (isset($order->handle_size)) ? $order->handle_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Color</b></td>
                                                <td><?php echo (isset($order->handle_color)) ? $order->handle_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle GSM</b></td>
                                                <td><?php echo (isset($order->handle_gsm)) ? $order->handle_gsm : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Stitching Type</b></td>
                                                <td><?php echo (isset($order->stitching_type)) ? $order->stitching_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Thread Color</b></td>
                                                <td><?php echo (isset($order->stitching_thread_color)) ? $order->stitching_thread_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Design</b></td>
                                                <td><?php echo (isset($order->stitching_design)) ? $order->stitching_design : '' ; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Sidepatty Section
                                            <a href="<?php echo base_url('sales'); ?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
                                        </h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Sidepatty Type</b></td>
                                                <td><?php echo (isset($order->sidepatty_type)) ? $order->sidepatty_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Size</b></td>
                                                <td><?php echo (isset($order->sidepatty_size)) ? $order->sidepatty_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Color</b></td>
                                                <td><?php echo (isset($order->sidepatty_color)) ? $order->sidepatty_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty GSM</b></td>
                                                <td><?php echo (isset($order->sidepatty_gsm)) ? $order->sidepatty_gsm : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing</b></td>
                                                <td><?php echo (isset($order->sidepatty_printing)) ? $order->sidepatty_printing : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing Color</b></td>
                                                <td><?php echo (isset($order->sidepatty_printing_color)) ? $order->sidepatty_printing_color : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Zip Type</b></td>
                                                <td><?php echo (isset($order->zip_type)) ? $order->zip_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Color</b></td>
                                                <td><?php echo (isset($order->zip_color)) ? $order->zip_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Size</b></td>
                                                <td><?php echo (isset($order->zip_size)) ? $order->zip_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Quality</b></td>
                                                <td><?php echo (isset($order->zip_quality)) ? $order->zip_quality : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Printing Method</b></td>
                                                <td><?php echo (isset($order->printing_method)) ? $order->printing_method : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Color Type</b></td>
                                                <td><?php echo (isset($order->printing_color_type)) ? $order->printing_color_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Style</b></td>
                                                <td><?php echo (isset($order->printing_style)) ? $order->printing_style : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Suggested Printing color</b></td>
                                                <td><?php echo (isset($order->suggested_printing_color)) ? $order->suggested_printing_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Language</b></td>
                                                <td><?php echo (isset($order->printing_language)) ? $order->printing_language : '' ;?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </form>
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
</body>
</html>
