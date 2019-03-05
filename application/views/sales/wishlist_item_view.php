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
                    Product Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Wishlist</li>
                    <li class="active">Product Details</li>
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
                                                    if (isset($wishlist->id)) {
                                                      $str = date('Ymd').$wishlist->id;
                                                      echo 'SRB'.str_pad($str,10,'0',STR_PAD_LEFT);
                                                    } else {
                                                      echo '';
                                                    }
                                                  ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><b>Quantity</b></td>
                                                <td><?php echo (isset($wishlist->quality)) ? $wishlist->quality : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Cost per Kg</b></td>
                                                <td><?php echo (isset($wishlist->cost_per_kg)) ? $wishlist->cost_per_kg : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Cost</b></td>
                                                <td><?php echo (isset($wishlist->total_cost)) ? $wishlist->total_cost : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Ordered Date</b></td>
                                                <td>
                                                  <?php
                                                    echo (isset($wishlist->created_on)) ? date('Y-m-d H:i:s',strtotime($wishlist->created_on)) : '-';
                                                  ?>
                                                </td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Customer Info</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Customer Name</b></td>
                                                <td><?php echo (isset($wishlist->customer_name)) ? $wishlist->customer_name : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Shop Name</b></td>
                                                <td><?php echo (isset($wishlist->shop_name)) ? $wishlist->shop_name : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td><?php echo (isset($wishlist->customer_email)) ? $wishlist->customer_email : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone Number</b></td>
                                                <td><?php echo (isset($wishlist->mobile)) ? $wishlist->mobile : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>GST / Aadhar Number</b></td>
                                                <td><?php echo (isset($wishlist->gst_aadhar_number)) ? $wishlist->gst_aadhar_number : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Shipping Address</b></td>
                                                <td><?php echo (isset($wishlist->shipping_address)) ? $wishlist->shipping_address : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>City</b></td>
                                                <td><?php echo (isset($wishlist->city)) ? $wishlist->city : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>State</b></td>
                                                <td><?php echo (isset($wishlist->state)) ? $wishlist->state : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Code</b></td>
                                                <td><?php echo (isset($wishlist->zip_code)) ? $wishlist->zip_code : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Transport via</b></td>
                                                <td><?php echo (isset($wishlist->transport_via)) ? $wishlist->transport_via : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Charges</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Other Charges</b></td>
                                                <td><?php echo (isset($wishlist->other_charges)) ? $wishlist->other_charges : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Cost</b></td>
                                                <td><?php echo (isset($wishlist->printing_cost)) ? $wishlist->printing_cost : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Block Charges</b></td>
                                                <td><?php echo (isset($wishlist->block_charges)) ? $wishlist->block_charges : '' ; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Material Type</b></td>
                                                <td><?php echo (isset($wishlist->material_type)) ? $wishlist->material_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Quality</b></td>
                                                <td><?php echo (isset($wishlist->quality)) ? $wishlist->quality : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Type</b></td>
                                                <td><?php echo (isset($wishlist->bag_type)) ? $wishlist->bag_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Layout</b></td>
                                                <td><?php echo (isset($wishlist->bag_layout)) ? $wishlist->bag_layout : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Size</b></td>
                                                <td><?php echo (isset($wishlist->bag_size)) ? $wishlist->bag_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Color</b></td>
                                                <td><?php echo (isset($wishlist->bag_color)) ? $wishlist->bag_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag GSM</b></td>
                                                <td><?php echo (isset($wishlist->bag_gsm)) ? $wishlist->bag_gsm : '' ;  ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Handle Type</b></td>
                                                <td><?php echo (isset($wishlist->handle_type)) ? $wishlist->handle_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Material Type</b></td>
                                                <td><?php echo (isset($wishlist->handle_material_type)) ? $wishlist->handle_material_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Size</b></td>
                                                <td><?php echo (isset($wishlist->handle_size)) ? $wishlist->handle_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Color</b></td>
                                                <td><?php echo (isset($wishlist->handle_color)) ? $wishlist->handle_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle GSM</b></td>
                                                <td><?php echo (isset($wishlist->handle_gsm)) ? $wishlist->handle_gsm : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Stitching Type</b></td>
                                                <td><?php echo (isset($wishlist->stitching_type)) ? $wishlist->stitching_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Thread Color</b></td>
                                                <td><?php echo (isset($wishlist->stitching_thread_color)) ? $wishlist->stitching_thread_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Design</b></td>
                                                <td><?php echo (isset($wishlist->stitching_design)) ? $wishlist->stitching_design : '' ; ?></td>
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
                                                <td><?php echo (isset($wishlist->sidepatty_type)) ? $wishlist->sidepatty_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Size</b></td>
                                                <td><?php echo (isset($wishlist->sidepatty_size)) ? $wishlist->sidepatty_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Color</b></td>
                                                <td><?php echo (isset($wishlist->sidepatty_color)) ? $wishlist->sidepatty_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty GSM</b></td>
                                                <td><?php echo (isset($wishlist->sidepatty_gsm)) ? $wishlist->sidepatty_gsm : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing</b></td>
                                                <td><?php echo (isset($wishlist->sidepatty_printing)) ? $wishlist->sidepatty_printing : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing Color</b></td>
                                                <td><?php echo (isset($wishlist->sidepatty_printing_color)) ? $wishlist->sidepatty_printing_color : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Zip Type</b></td>
                                                <td><?php echo (isset($wishlist->zip_type)) ? $wishlist->zip_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Color</b></td>
                                                <td><?php echo (isset($wishlist->zip_color)) ? $wishlist->zip_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Size</b></td>
                                                <td><?php echo (isset($wishlist->zip_size)) ? $wishlist->zip_size : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Quality</b></td>
                                                <td><?php echo (isset($wishlist->zip_quality)) ? $wishlist->zip_quality : '' ; ?></td>
                                            </tr>
                                        </table>
                                        <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Printing Method</b></td>
                                                <td><?php echo (isset($wishlist->printing_method)) ? $wishlist->printing_method : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Color Type</b></td>
                                                <td><?php echo (isset($wishlist->printing_color_type)) ? $wishlist->printing_color_type : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Style</b></td>
                                                <td><?php echo (isset($wishlist->printing_style)) ? $wishlist->printing_style : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Suggested Printing color</b></td>
                                                <td><?php echo (isset($wishlist->suggested_printing_color)) ? $wishlist->suggested_printing_color : '' ; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Language</b></td>
                                                <td><?php echo (isset($wishlist->printing_language)) ? $wishlist->printing_language : '' ;?></td>
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
