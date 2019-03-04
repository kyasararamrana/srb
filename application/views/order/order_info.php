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
                    Order Details
                </h1>
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
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Quantity</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Cost per Kg</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Total Cost</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Ordered Date</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>

                                        <h4 class="mt-0 text-aqua">Customer Info</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Customer Name</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Shop Name</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Email</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Phone Number</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Aadhar Number</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Shipping Address</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>City</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>State</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Code</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                        
                                        <h4 class="mt-0 text-aqua">Charges</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Other Charges</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Cost</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Block Charges</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Material Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Quality</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Layout</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Size</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Bag GSM</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                        
                                        <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Handle Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Material Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Size</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Handle GSM</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                        
                                        <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Stitching Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Thread Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Stitching Design</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="col-md-4">
                                        <h4 class="mt-0 text-aqua">Sidepatty Section
                                            <a href="<?php echo base_url('ordermanagement/orderconfirm'); ?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
                                        </h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Sidepatty Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Size</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty GSM</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Sidepatty Printing Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                        
                                        <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Zip Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Size</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Quality</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                        </table>
                                        
                                        <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Printing Method</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Color Type</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Printing Style</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Suggested Printing color</b></td>
                                                <td>xxxxxx</td>
                                            </tr>
                                            <tr>
                                                <td><b>Language</b></td>
                                                <td>xxxxxx</td>
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