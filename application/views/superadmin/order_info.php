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
                    <li><a href="#">Orders List</a></li>
                    <li class="active">Order Info</li>
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
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Order Info</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order ID</label>
                                                <input type="text" class="form-control" name="orderid" id="" value="<?php
                                                  if (isset($order->id)) {
                                                    $str = date('Ymd').$order->id;
                                                    echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                                  } else {
                                                    echo '';
                                                  }
                                                ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" class="form-control" name="cname" id="" value="<?php echo (isset($order->customer_name)) ? $order->customer_name : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="mobile" id="" value="<?php echo (isset($order->mobile)) ? $order->mobile : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" class="form-control" name="quantity" id="" value="<?php echo (isset($order->quantity)) ? $order->quantity : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cost</label>
                                                <input type="text" class="form-control" name="cost" id="" value="<?php echo (isset($order->total_price)) ? $order->total_price : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" class="form-control" name="orderdate" id="" value="<?php echo (isset($order->created_on)) ? date('d-m-Y H:i:s',strtotime($order->created_on)) : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <input type="text" class="form-control" name="mtype" id="" value="<?php echo (isset($order->material_type)) ? $order->material_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <input type="text" class="form-control" name="quality" id="" value="<?php echo (isset($order->quality)) ? $order->quality : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Type</label>
                                                <input type="text" class="form-control" name="btype" id="" value="<?php echo (isset($order->bag_type)) ? $order->bag_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Layout</label>
                                                <input type="text" class="form-control" name="layout" id="" value="<?php echo (isset($order->bag_layout)) ? $order->bag_layout : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Size</label>
                                                <input type="text" class="form-control" name="bsize" id="" value="<?php echo (isset($order->bag_size)) ? $order->bag_size : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Color</label>
                                                <input type="text" class="form-control" name="bcolor" id="" value="<?php echo (isset($order->bag_color)) ? $order->bag_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag GSM</label>
                                                <input type="text" class="form-control" name="bgsm" id="" value="<?php echo (isset($order->bag_gsm)) ? $order->bag_gsm : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Type</label>
                                                <input type="text" class="form-control" name="handletype" id="" value="<?php echo (isset($order->handle_type)) ? $order->handle_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Material Type</label>
                                                <input type="text" class="form-control" name="handlematerialtype" id="" value="<?php echo (isset($order->handle_material_type)) ? $order->handle_material_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <input type="text" class="form-control" name="handlesize" id="" value="<?php echo (isset($order->handle_size)) ? $order->handle_size : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <input type="text" class="form-control" name="handlecolor" id="" value="<?php echo (isset($order->handle_color)) ? $order->handle_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <input type="text" class="form-control" name="handlegsm" id="" value="<?php echo (isset($order->handle_gsm)) ? $order->handle_gsm : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Sidepatty Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Type</label>
                                                <input type="text" class="form-control" name="sidepattytype" id="" value="<?php echo (isset($order->sidepatty_type)) ? $order->sidepatty_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <input type="text" class="form-control" name="sidepattysize" id="" value="<?php echo (isset($order->sidepatty_size)) ? $order->sidepatty_size : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <input type="text" class="form-control" name="sidepattycolor" id="" value="<?php echo (isset($order->sidepatty_color)) ? $order->sidepatty_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <input type="text" class="form-control" name="sidepattygsm" id="" value="<?php echo (isset($order->sidepatty_gsm)) ? $order->sidepatty_gsm : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing</label>
                                                <input type="text" class="form-control" name="sidepattyprint" id="" value="<?php echo (isset($order->sidepatty_printing)) ? $order->sidepatty_printing : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing Color</label>
                                                <input type="text" class="form-control" name="sidepattyprintcolor" id="" value="<?php echo (isset($order->sidepatty_printing_color)) ? $order->sidepatty_printing_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Type</label>
                                                <input type="text" class="form-control" name="ziptype" id="" value="<?php echo (isset($order->zip_type)) ? $order->zip_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <input type="text" class="form-control" name="zipcolor" id="" value="<?php echo (isset($order->zip_color)) ? $order->zip_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <input type="text" class="form-control" name="zipsize" id="" value="<?php echo (isset($order->zip_size)) ? $order->zip_size : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <input type="text" class="form-control" name="zipquality" id="" value="<?php echo (isset($order->zip_quality)) ? $order->zip_quality : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Type</label>
                                                <input type="text" class="form-control" name="stitchtype" id="" value="<?php echo (isset($order->stitching_type)) ? $order->stitching_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <input type="text" class="form-control" name="stitchcolor" id="" value="<?php echo (isset($order->stitching_thread_color)) ? $order->stitching_thread_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Design</label>
                                                <input type="text" class="form-control" name="stitchdesign" id="" value="<?php echo (isset($order->stitching_design)) ? $order->stitching_design : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Method</label>
                                                <input type="text" class="form-control" name="printmethod" id="" value="<?php echo (isset($order->printing_method)) ? $order->printing_method : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Color Type</label>
                                                <input type="text" class="form-control" name="printcolor" id="" value="<?php echo (isset($order->printing_color_type)) ? $order->printing_color_type : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Style</label>
                                                <input type="text" class="form-control" name="printstyle" id="" value="<?php echo (isset($order->printing_style)) ? $order->printing_style : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Suggested Printing color</label>
                                                <input type="text" class="form-control" name="sugprintcolor" id="" value="<?php echo (isset($order->suggested_printing_color)) ? $order->suggested_printing_color : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Language</label>
                                                <input type="text" class="form-control" name="lang" id="" value="<?php echo (isset($order->printing_language)) ? $order->printing_language : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Charges</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Charges</label>
                                                <input type="text" class="form-control" name="othercharge" id="" value="<?php echo (isset($order->other_charges)) ? $order->other_charges : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Cost</label>
                                                <input type="text" class="form-control" name="printcost" id="" value="<?php echo (isset($order->printing_cost)) ? $order->printing_cost : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block Charges</label>
                                                <input type="text" class="form-control" name="blockcharge" id="" value="<?php echo (isset($order->block_charges)) ? $order->block_charges : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Cost Details</h4>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Cost per Kg</label>
                                                <input type="text" class="form-control" name="bagcost" id="" value="<?php echo (isset($order->cost_per_kg)) ? $order->cost_per_kg : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Payment Details</h4>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Payment status</label>
                                                <input type="text" class="form-control" name="bagcost" id="" value="<?php echo (isset($order->payment_status)) ? $order->payment_status : '' ; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Paid Amount</label>
                                                <input type="text" class="form-control" name="bagcost" id="" value="<?php echo (isset($order->paid_amount)) ? $order->paid_amount : '' ; ?>" readonly>
                                            </div>
                                        </div>
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
