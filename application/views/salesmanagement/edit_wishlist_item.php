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
                    Edit Product Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Wishlist</li>
                    <li class="active">Edit Product</li>
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
                                            <h4 class="mt-0 text-aqua">Bag Section
                                                <a href="<?php echo base_url('salesmanagement/wishlist'); ?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
                                            </h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <select class="form-control" name="mtype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <select class="form-control" name="quality">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Type</label>
                                                <select class="form-control" name="btype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Layout</label>
                                                <select class="form-control" name="layout">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Size</label>
                                                <select class="form-control" name="bsize">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Color</label>
                                                <select class="form-control" name="bcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag GSM</label>
                                                <select class="form-control" name="bgsm">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
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
                                                <select class="form-control" name="handletype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Material Type</label>
                                                <select class="form-control" name="handlematerialtype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <select class="form-control" name="handlesize">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <select class="form-control" name="handlecolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <select class="form-control" name="handlegsm">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
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
                                                <select class="form-control" name="sidepattytype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <select class="form-control" name="sidepattysize">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <select class="form-control" name="sidepattycolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <select class="form-control" name="sidepattygsm">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing</label>
                                                <select class="form-control" name="sidepattyprint">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing Color</label>
                                                <select class="form-control" name="sidepattyprintcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
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
                                                <select class="form-control" name="ziptype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <select class="form-control" name="zipcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <select class="form-control" name="zipsize">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <select class="form-control" name="zipquality">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
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
                                                <select class="form-control" name="stitchtype">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <select class="form-control" name="stitchcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Design</label>
                                                <select class="form-control" name="stitchdesign">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
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
                                                <select class="form-control" name="printmethod">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Color Type</label>
                                                <select class="form-control" name="printcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Style</label>
                                                <select class="form-control" name="printstyle">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Suggested Printing color</label>
                                                <select class="form-control" name="sugprintcolor">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Language</label>
                                                <select class="form-control" name="lang">
                                                    <option value="" disabled>Select</option>
                                                    <option value="1" selected>Option</option>
                                                    <option value="2">Option</option>
                                                    <option value="3">Option</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Other Details</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Charges</label>
                                                <input type="text" class="form-control" name="othercharge" placeholder="Enter Extra Charges" value="1000">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Cost</label>
                                                <input type="text" class="form-control" name="printcost" placeholder="Enter Printing Cost" value="2000">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block Charges</label>
                                                <input type="text" class="form-control" name="blockcharge" placeholder="Enter Block Charge" value="1000">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" class="form-control" name="quantity" value="50" placeholder="Enter Quantity">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cost per Kg</label>
                                                <input type="text" class="form-control" name="costperkg" readonly>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Total Cost</label>
                                                <input type="text" class="form-control" name="totalcost" readonly>
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