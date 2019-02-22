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
                    Order Form
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Order Form</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="editOrderForm" action="">
                                <div class="box-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="stepper">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Product Details">
                                                            <span class="round-tab">1</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Cost Details">
                                                            <span class="round-tab">2</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Customer Details">
                                                            <span class="round-tab">3</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Order Status">
                                                            <span class="round-tab">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <form role="form">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="mt-0 text-aqua">Bag Section</h4>
                                                                </div>
                                                                <!-- col -->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Material Type</label>
                                                                        <select class="form-control" name="mtype">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Quality</label>
                                                                        <select class="form-control" name="quality">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Type</label>
                                                                        <select class="form-control" name="btype">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Layout</label>
                                                                        <select class="form-control" name="layout">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Size</label>
                                                                        <select class="form-control" name="bsize">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Color</label>
                                                                        <select class="form-control" name="bcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag GSM</label>
                                                                        <select class="form-control" name="bgsm">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
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
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Material Type</label>
                                                                        <select class="form-control" name="handlematerialtype">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Size</label>
                                                                        <select class="form-control" name="handlesize">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Color</label>
                                                                        <select class="form-control" name="handlecolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle GSM</label>
                                                                        <select class="form-control" name="handlegsm">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
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
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Size</label>
                                                                        <select class="form-control" name="sidepattysize">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Color</label>
                                                                        <select class="form-control" name="sidepattycolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty GSM</label>
                                                                        <select class="form-control" name="sidepattygsm">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Printing</label>
                                                                        <select class="form-control" name="sidepattyprint">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Printing Color</label>
                                                                        <select class="form-control" name="sidepattyprintcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
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
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Color</label>
                                                                        <select class="form-control" name="zipcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Size</label>
                                                                        <select class="form-control" name="zipsize">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Quality</label>
                                                                        <select class="form-control" name="zipquality">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
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
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Stitching Thread Color</label>
                                                                        <select class="form-control" name="stitchcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Stitching Design</label>
                                                                        <select class="form-control" name="stitchdesign">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
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
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Color Type</label>
                                                                        <select class="form-control" name="printcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Style</label>
                                                                        <select class="form-control" name="printstyle">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Suggested Printing color</label>
                                                                        <select class="form-control" name="sugprintcolor">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Language</label>
                                                                        <select class="form-control" name="lang">
                                                                            <option value="" selected disabled>Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
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
                                                                        <input type="text" class="form-control" name="othercharge">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Cost</label>
                                                                        <input type="text" class="form-control" name="printcost">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Block Charges</label>
                                                                        <input type="text" class="form-control" name="blockcharge">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li>
                                                                    <a class="btn btn-primary next-step">Next</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="mt-0 text-aqua">Cost Details</h4>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Quantity</label>
                                                                        <input type="text" class="form-control" name="quantity">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Cost per Kg</label>
                                                                        <input type="text" class="form-control" name="costperkg">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Total Cost</label>
                                                                        <input type="text" class="form-control" name="totalcost">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li>
                                                                    <a class="btn btn-default prev-step">Previous</a>
                                                                </li>
                                                                <li>
                                                                    <a href="<?php echo base_url('salesmanagement/wishlist'); ?>" class="btn btn-info">Add to Wishlist</a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-primary next-step">Order Now</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h4 class="mt-0 text-aqua">Customer Info</h4>
                                                                </div>
                                                                <!-- col -->
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Customer Name</label>
                                                                        <input type="text" class="form-control" name="cname" placeholder="Name of the Customer">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Shop Name</label>
                                                                        <input type="text" class="form-control" name="shopname" placeholder="Name of the Customer">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="text" class="form-control" name="cemail" placeholder="Enter Email">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Phone Number</label>
                                                                        <input type="text" class="form-control" name="mobile" placeholder="Enter Phone Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>GST / Aadhar Number</label>
                                                                        <input type="text" class="form-control" name="mobile" placeholder="Enter GST / Aadhar Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Whatsapp Number</label>
                                                                        <input type="text" class="form-control" name="mobile" placeholder="Enter Whatsapp Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Main Address</label>
                                                                        <input type="text" class="form-control" name="mainaddress" placeholder="Address Line..">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Shipping Address</label>
                                                                        <input type="text" class="form-control" name="shippingaddress" placeholder="Address Line..">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input type="text" class="form-control" name="quantity" placeholder="Name of the City">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="text" class="form-control" name="cost" placeholder="Name of the State">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zipcode</label>
                                                                        <input type="text" class="form-control" name="orderdate" placeholder="Enter Zipcode">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li>
                                                                    <a class="btn btn-default prev-step">Previous</a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-primary next-step">Place Order</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
                                                            <h3>All done!</h3>
                                                            <p>You have successfully placed your order.</p>
                                                        </div>
                                                    </div>
                                                </form>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#editOrderForm').bootstrapValidator({
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Bag Name is required'
                            }
                        }
                    }
                }
            });
        });
    </script>

    <script>
        /*jslint browser: true*/
        /*global $, jQuery, alert*/
        (function($) {
            'use strict';

            $(function() {

                $(document).ready(function() {
                    function triggerClick(elem) {
                        $(elem).click();
                    }
                    var $progressWizard = $('.stepper'),
                        $tab_active,
                        $tab_prev,
                        $tab_next,
                        $btn_prev = $progressWizard.find('.prev-step'),
                        $btn_next = $progressWizard.find('.next-step'),
                        $tab_toggle = $progressWizard.find('[data-toggle="tab"]'),
                        $tooltips = $progressWizard.find('[data-toggle="tab"][title]');

                    // To do:
                    // Disable User select drop-down after first step.
                    // Add support for payment type switching.

                    //Initialize tooltips
                    $tooltips.tooltip();

                    //Wizard
                    $tab_toggle.on('show.bs.tab', function(e) {
                        var $target = $(e.target);

                        if (!$target.parent().hasClass('active, disabled')) {
                            $target.parent().prev().addClass('completed');
                        }
                        if ($target.parent().hasClass('disabled')) {
                            return false;
                        }
                    });

                    // $tab_toggle.on('click', function(event) {
                    //     event.preventDefault();
                    //     event.stopPropagation();
                    //     return false;
                    // });

                    $btn_next.on('click', function() {
                        $tab_active = $progressWizard.find('.active');

                        $tab_active.next().removeClass('disabled');

                        $tab_next = $tab_active.next().find('a[data-toggle="tab"]');
                        triggerClick($tab_next);

                    });
                    $btn_prev.click(function() {
                        $tab_active = $progressWizard.find('.active');
                        $tab_prev = $tab_active.prev().find('a[data-toggle="tab"]');
                        triggerClick($tab_prev);
                    });
                });
            });

        }(jQuery, this));
    </script>

</body>

</html>