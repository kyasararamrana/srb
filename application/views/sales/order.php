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
                <h1> Order Form </h1>
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
                            <form method="post" id="editOrderForm" action="<?php echo base_url('sales/insert'); ?>">
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
                                                <!-- <form role="form"> -->
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
                                                                        <select class="form-control" name="material_type">
                                                                          <option value="">Select</option>
                                                                          <option value="1">Non woven</option>
                                                                          <option value="2">Plastic</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Quality</label>
                                                                        <select class="form-control" name="quality">
                                                                            <option value="">Select</option>
                                                                            <option value="1">First quality</option>
                                                                            <option value="2">Second quality</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Type</label>
                                                                        <select class="form-control" name="bag_type" id="bag_type">
                                                                          <option value="">Select</option>
                                                                          <?php if (count($bagtype) > 0) { ?>
                                                                            <?php foreach ($bagtype as $type) { ?>
                                                                              <option value="<?php echo $type->id; ?>"><?php echo $type->bag_type; ?></option>
                                                                            <?php } ?>
                                                                          <?php } else { ?>
                                                                            <option value="">No option found</option>
                                                                          <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Layout</label>
                                                                        <select class="form-control" name="bag_layout" id="bag_layout">
                                                                            <option value="">Select</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Size</label>
                                                                        <select class="form-control" name="bag_size" id="bag_size">
                                                                            <option value="">Select</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag Color</label>
                                                                        <select class="form-control" name="bag_color" id="bag_color">
                                                                          <option value="">Select</option>
                                                                            <?php if (count($bagcolor) > 0) { ?>
                                                                              <?php foreach ($bagcolor as $color) { ?>
                                                                                <option value="<?php echo $color->id; ?>"><?php echo $color->bag_color; ?></option>
                                                                              <?php } ?>
                                                                            <?php } else { ?>
                                                                              // code...
                                                                            <?php } ?>
                                                                            <option value="">Select</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Bag GSM</label>
                                                                        <select class="form-control" name="bag_gsm" id="bag_gsm">
                                                                            <option value="">Select</option>
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
                                                                        <select class="form-control" name="handle_type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Material Type</label>
                                                                        <select class="form-control" name="handle_material_type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Size</label>
                                                                        <select class="form-control" name="handle_size">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle Color</label>
                                                                        <select class="form-control" name="handle_color">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Handle GSM</label>
                                                                        <select class="form-control" name="handle_gsm">
                                                                            <option value="">Select</option>
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
                                                                        <select class="form-control" name="sidepatty_type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Size</label>
                                                                        <select class="form-control" name="sidepatty_size">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Color</label>
                                                                        <select class="form-control" name="sidepatty_color">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty GSM</label>
                                                                        <select class="form-control" name="sidepatty_gsm">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Printing</label>
                                                                        <select class="form-control" name="sidepatty_printing">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Sidepatty Printing Color</label>
                                                                        <select class="form-control" name="sidepatty_printing_color">
                                                                            <option value="">Select</option>
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
                                                                        <select class="form-control" name="zip_type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Color</label>
                                                                        <select class="form-control" name="zip_color">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Size</label>
                                                                        <select class="form-control" name="zip_size">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zip Quality</label>
                                                                        <select class="form-control" name="zip_quality">
                                                                            <option value="">Select</option>
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
                                                                        <select class="form-control" name="stitching_type">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Stitching Thread Color</label>
                                                                        <select class="form-control" name="stitching_thread_color">
                                                                            <option value="">Select</option>
                                                                            <option value="1">Option</option>
                                                                            <option value="2">Option</option>
                                                                            <option value="3">Option</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Stitching Design</label>
                                                                        <select class="form-control" name="stitching_design">
                                                                            <option value="">Select</option>
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
                                                                        <select class="form-control" name="printing_method">
                                                                            <option value="">Select</option>
                                                                            <?php if (count($printingmethod) > 0) { ?>
                                                                              <?php foreach ($printingmethod as $method) { ?>
                                                                                <option value="<?php echo $method->id; ?>"><?php echo $method->printing_method; ?></option>
                                                                              <?php } ?>
                                                                            <?php } else { ?>
                                                                              <option value="">No option found</option>
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Color Type</label>
                                                                        <select class="form-control" name="printing_color_type">
                                                                          <option value="">Select</option>
                                                                          <?php if (count($printingcolortype) > 0) { ?>
                                                                            <?php foreach ($printingcolortype as $colortype) { ?>
                                                                              <option value="<?php echo $colortype->id; ?>"><?php echo $colortype->printing_color_type; ?></option>
                                                                            <?php } ?>
                                                                          <?php } else { ?>
                                                                            <option value="2">Option</option>
                                                                          <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Style</label>
                                                                        <select class="form-control" name="printing_style">
                                                                          <option value="">Select</option>
                                                                          <?php if (count($printingstyle) > 0) { ?>
                                                                            <?php foreach ($printingstyle as $style) { ?>
                                                                              <option value="<?php echo $style->id; ?>"><?php echo $style->printing_style; ?></option>
                                                                            <?php } ?>
                                                                          <?php } else { ?>
                                                                            <option value="1">No options found</option>
                                                                          <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Suggested Printing color</label>
                                                                        <select class="form-control" name="suggested_printing_color">
                                                                          <option value="">Select</option>
                                                                          <?php if (count($suggestedprintingcolor) > 0) { ?>
                                                                            <?php foreach ($suggestedprintingcolor as $suggested) { ?>
                                                                              <option value="<?php echo $suggested->id; ?>"><?php echo $suggested->suggested_printing_color; ?></option>
                                                                            <?php } ?>
                                                                          <?php } else { ?>
                                                                            <option value="">No Options found</option>
                                                                          <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Language</label>
                                                                        <select class="form-control" name="printing_language">
                                                                            <option value="">Select</option>
                                                                            <?php if (count($printinglanguage) > 0) { ?>
                                                                              <?php foreach ($printinglanguage as $language) { ?>
                                                                                <option value="<?php echo $language->id; ?>"><?php echo $language->printing_language; ?></option>
                                                                              <?php } ?>
                                                                            <?php } else { ?>
                                                                              <option value="">No option found</option>
                                                                            <?php } ?>
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
                                                                        <input type="text" class="form-control" name="other_charges" id="other_charges">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Printing Cost</label>
                                                                        <input type="text" class="form-control" name="printing_cost" id="printing_cost">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Block Charges</label>
                                                                        <input type="text" class="form-control" name="block_charges" id="block_charges">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Additional GSM</label>
                                                                        <input type="text" class="form-control" name="additional_gsm" id="additional_gsm">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Percentage</label>
                                                                        <input type="text" class="form-control" name="percentage" id="percentage">
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
                                                                        <label><input type="radio"  name="quantity" value="1" checked> Quantity (in kg's)</label>
                                                                        <!-- <input type="text" class="form-control" name="quantity"> -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label><input type="radio"  name="quantity" value="2"> Quantity (required no.of bags per kg)</label>
                                                                        <!-- <input type="text" class="form-control" name="quantity"> -->
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" id="quantity_in_kgs_container">
                                                                    <div class="form-group">
                                                                        <label>Quantity (in kg's)</label>
                                                                        <input type="text" class="form-control" name="quantity_in_kgs" id="quantity_in_kgs" placeholder="in kg's">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4" id="quantity_no_of_bags_per_kg_container" style="display:none">
                                                                    <div class="form-group">
                                                                        <label>Quantity (required no.of bags per kg)</label>
                                                                        <input type="text" class="form-control" name="quantity_per_kg" id="quantity_per_kg" placeholder="required no.of bags per kg">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Cost per Kg</label>
                                                                        <input type="text" class="form-control" name="cost_per_kg" id="cost_per_kg" value="170">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Weight of bag</label>
                                                                        <input type="text" class="form-control" id="weight_of_bag" name="weight_of_bag" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Number of bag per kg</label>
                                                                        <input type="text" class="form-control" name="bags_per_kg" id="bags_per_kg" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Cost per bag</label>
                                                                        <input type="text" class="form-control" name="cost_per_bag" id="cost_per_bag" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Total price</label>
                                                                        <input type="text" class="form-control" name="total_price" id="total_price" readonly>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li>
                                                                    <a class="btn btn-default prev-step">Previous</a>
                                                                </li>
                                                                <!-- <li>
                                                                    <a href="<?php echo base_url('salesmanagement/wishlist'); ?>" class="btn btn-info">Add to Wishlist</a>
                                                                </li> -->
                                                                <li>
                                                                    <a class="btn btn-primary next-step">Next</a>
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
                                                                        <input type="text" class="form-control" name="customer_name" placeholder="Name of the Customer">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Shop Name</label>
                                                                        <input type="text" class="form-control" name="shop_name" placeholder="Name of the Customer">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Email</label>
                                                                        <input type="text" class="form-control" name="customer_email" placeholder="Enter Email">
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
                                                                        <input type="text" class="form-control" name="gst_aadhar_number" placeholder="Enter GST / Aadhar Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Whatsapp Number</label>
                                                                        <input type="text" class="form-control" name="whatsapp_number" placeholder="Enter Whatsapp Number">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Main Address</label>
                                                                        <input type="text" class="form-control" name="main_address" placeholder="Address Line..">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Shipping Address</label>
                                                                        <input type="text" class="form-control" name="shipping_address" placeholder="Address Line..">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>City</label>
                                                                        <input type="text" class="form-control" name="city" placeholder="Name of the City">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>State</label>
                                                                        <input type="text" class="form-control" name="state" placeholder="Name of the State">
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label>Zipcode</label>
                                                                        <input type="text" class="form-control" name="zip_code" placeholder="Enter Zipcode">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <ul class="list-inline pull-right">
                                                                <li>
                                                                    <a class="btn btn-default prev-step">Previous</a>
                                                                </li>
                                                                <li class="checkbox">
                                                                    <!-- <a class="btn btn-default prev-step">Previous</a> -->
                                                                    <label><input type="checkbox" id="wishlist" name="wishlist" value="1"> Add to Wishlist</label>
                                                                </li>
                                                                <li>
                                                                    <!-- <a class="btn btn-primary next-step">Place Order</a> -->
                                                                    <button type="submit" class="btn btn-primary" id="place_order">Place Order</button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
                                                            <h3>All done!</h3>
                                                            <p>You have successfully placed your order.</p>
                                                        </div>
                                                    </div>
                                                <!-- </form> -->
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
        $(document).ready(function(){
          //ajax call for bag layout by bag type
          $('#bag_type').on('change',function(){
            var bag_type = $(this).val();
            var layout = $(this).data('layout');
            $('#bag_layout').html('<option value="">loading...</option>');
            $.ajax({
              url:'<?php echo base_url('bag/get_baglayout_by_bagtype'); ?>',
              type:'post',
              data:{'bag_type':bag_type,'layout':layout},
              success:function(data){
                if (data) {
                  $('#bag_layout').html(data);
                } else {
                  $('#bag_layout').html('<option value="">Select</option>');
                }
              }
            });
          }).on('change',function(){
            var bag_type = $(this).val();
            $.ajax({
              url:'<?php echo base_url('bag/get_bag_additional_details'); ?>',
              type:'post',
              data:{'bag_type':bag_type},
              dataType:'JSON',
              success:function(data){
                if (data) {
                  $('#other_charges').val(data.other_charges);
                  $('#printing_cost').val(data.printing_cost);
                  $('#block_charges').val(data.block_charges);
                  $('#additional_gsm').val(data.additional_gsm);
                  $('#percentage').val(data.percentage);
                  $('#cost_per_kg').val(data.cost_per_kg);
                } else {
                  $('#other_charges').val('');
                  $('#printing_cost').val('');
                  $('#block_charges').val('');
                  $('#additional_gsm').val('');
                  $('#percentage').val('');
                  $('#cost_per_kg').val('');
                }
              }
            });
          }).trigger('change');
          //ajax call for bag size by bag layout
          $('#bag_layout').on('change',function(){
           var bag_layout = $(this).val();
           var size = $(this).data('size');
           $('#bag_size').html('<option value="">loading...</option>');
           $.ajax({
             url:'<?php echo base_url('bag/get_bagsize_by_baglayout'); ?>',
             type:'post',
             data:{'bag_layout':bag_layout,'size':size},
             success:function(data){
               if (data) {
                 $('#bag_size').html(data);
               } else {
                 $('#bag_size').html('<option value="">Select</option>');
               }
             }
           });
          }).trigger('change');
          //ajax call for bag size by bag layout
          $('#bag_size').on('change',function(){
           var bag_size = $(this).val();
           $('#bag_gsm').html('<option value="">loading...</option>');
           $.ajax({
             url:'<?php echo base_url('bag/get_baggsm_by_bagsize'); ?>',
             type:'post',
             data:{'bag_size':bag_size},
             success:function(data){
               if (data) {
                 $('#bag_gsm').html(data);
               } else {
                 $('#bag_gsm').html('<option value="">Select</option>');
               }
             }
           });
          }).trigger('change');
        });
        //place order button override to wishlist
        $('#wishlist').on('click',function(){
          if ($(this).prop('checked') == true) {
            $('#place_order').text('Add to Wishlist');
          } else {
            $('#place_order').text('Place Order');
          }
        });
        //price calculation
        $('#quantity_in_kgs,#quantity_per_kg').on('keyup',function(){
          if ($('#bag_type').find('option:selected').text() == 'Dcut') {
            var bag_size = $('#bag_size').find('option:selected').text().split('*');
            var bag_gsm = $('#bag_gsm').find('option:selected').text();
            var printing_cost = $('#printing_cost').val();
            var handle_rate = $('#handle_rate').val();
            var zip_rate = $('#zip_rate').val();
            var other_charges = $('#other_charges').val();
            var minimum_quantity = $('#minimum_quantity').val();
            var quantity_kg = $('#quantity_in_kgs').val();
            var quantity_per_kg = $('#quantity_per_kg').val();
            var additional_gsm = $('#additional_gsm').val();
            var percentage = $('#percentage').val();
            var cost_per_kg = $('#cost_per_kg').val();
            var width = bag_size[0];
            var length = bag_size[1];
            var weight_of_bag_formula = (width * ((length * 2) + 5) * (parseInt(bag_gsm) + parseInt(additional_gsm))) / 1550;
            var weight_of_bag = weight_of_bag_formula;
            $('#weight_of_bag').val(weight_of_bag);
            //no of bags per kg
            var no_of_bags_per_kg_formula = 1000/weight_of_bag;
            var no_of_bags_per_kg = no_of_bags_per_kg_formula;
            $('#bags_per_kg').val(no_of_bags_per_kg.toFixed(2));
            //cost of the bag
            var cost_per_bag_formula = ((weight_of_bag / 1000) * cost_per_kg);
            var cost_per_bag_value = cost_per_bag_formula;
            var final_cost_per_bag = cost_per_bag_value + (cost_per_bag_value * percentage) + (parseInt(printing_cost));
            $('#cost_per_bag').val(final_cost_per_bag.toFixed(2));
            //cost per kg
            // cost_per_kg = cost_per_kg + (no_of_bags_per_kg * (parseInt(handle_rate) + parseInt(zip_rate) + parseInt(other_charges) + parseInt(minimum_quantity)));
            // $('#cost_per_kg').val(cost_per_kg.toFixed(2));
            //total bag cost
            if((quantity_per_kg != '') && (typeof quantity_per_kg !== "undefined")) {
              var total_cost = final_cost_per_bag * parseInt(quantity_per_kg) * no_of_bags_per_kg;
              $('#total_price').val(total_cost);
            } else if((quantity_kg != '') && (typeof quantity_kg !== "undefined")) {
              var total_cost = final_cost_per_bag * parseInt(quantity_kg);
              $('#total_price').val(total_cost);
            }
          }
        }).trigger('keyup');
        //show and hiding quantity input boxes
        $('input[name="quantity"]').click(function(){
          if($(this).val() == 1) {
            $('#quantity_in_kgs_container').css('display','block');
            $('#quantity_no_of_bags_per_kg_container').css('display','none');
            $('#quantity_in_kgs').val('');
          } else if ($(this).val() == 2) {
            $('#quantity_no_of_bags_per_kg_container').css('display','block');
            $('#quantity_in_kgs_container').css('display','none');
            $('#quantity_per_kg').val('');
          }
        });
    </script>
</body>
</html>
