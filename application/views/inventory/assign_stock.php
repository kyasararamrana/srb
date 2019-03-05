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
                    Assign Stock
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Order List</li>
                    <li class="active">Assign Stock</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form role="form" action="<?php echo base_url('inventory/section_orders'); ?>" method="POST">
                                <input type="hidden" name="order_id" id="order_id" value="<?php echo isset($order_id)?$order_id:''; ?>">
								<div class="box-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="stepper">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active fivetabs">
                                                        <a class="persistant-disabled" href="#stepper-step-0" data-toggle="tab" aria-controls="stepper-step-0" role="tab" title="Material Setion">
                                                            <span class="round-tab">1</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled fivetabs">
                                                        <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Zip Setion">
                                                            <span class="round-tab">2</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled fivetabs">
                                                        <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Handle Section">
                                                            <span class="round-tab">3</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled fivetabs">
                                                        <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Sidepatty Section">
                                                            <span class="round-tab">4</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled fivetabs">
                                                        <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Bag Section">
                                                            <span class="round-tab">5</span>
                                                        </a>
                                                    </li>
                                                </ul>

    <div class="tab-content">
        <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-0">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 text-aqua">Material Section</h4>
                </div>
                <!-- col -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="myTable" class="table table-list-0">
                            <thead>
                                <tr>
                                    <th>Select Vendor</th>
                                    <th>Stock Name</th>
                                    <th>Size</th>
                                    <th>Thickness</th>
                                    <th>Color</th>
                                    <th>Pieces</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="stock_name_append0">
                                    <td>
                                        <select name="v_id[]" id="v_id" onchange="get_allflags(this.value,'0')" class="form-control">
                                            <option value="" >Select</option>
											<?php if(isset($vendor_list) && count($vendor_list)>0){ ?>
											<?php foreach($vendor_list as $lis){ ?>
														<option value="<?php echo $lis['v_id']; ?>" ><?php echo $lis['v_name']; ?></option>
											<?php } ?>
											<?php } ?>
                                        </select>
                                    </td>
									
                                    <td>
                                        <select name="s_name[]" id="s_name" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="s_size[]" id="s_size" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="s_thickness[]" id="s_thickness" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                          <select name="s_color[]" id="s_color" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
									
                                    <td>
                                        <input type="text" name="pieces[]" placeholder="Enter Pieces" class="form-control" />
                                    </td>
									
                                    <td>&nbsp;</td>
                                </tr>
							
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-md" id="addRow0">Add Row</button>
                    </div>
                </div>
            </div>
            <ul class="list-inline pull-right">
                <li>
                    <a class="btn btn-primary next-step">Next</a>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="stepper-step-1">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 text-aqua">Zip Section</h4>
                </div>
                <!-- col -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="" class="table table-list-1">
                            <thead>
                                <tr>
                                    <th>Stock Name</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>Quality</th>
                                    <th>Quantity</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="zsname" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="ztype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="zsize" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="zcolor" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="zquality" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="zquantity" placeholder="Enter Quantity" class="form-control" />
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-md" id="addRow1">Add Row</button>
                    </div>
                </div>
            </div>
            <ul class="list-inline pull-right">
                <li>
                    <a class="btn btn-default prev-step">Previous</a>
                </li>
                <li>
                    <a class="btn btn-primary next-step">Next</a>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="stepper-step-2">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 text-aqua">Handle Section</h4>
                </div>
                <!-- col -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="" class="table table-list-2">
                            <thead>
                                <tr>
                                    <th>Stock Name</th>
                                    <th>Type</th>
                                    <th>Material Type</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>GSM</th>
                                    <th>Quantity</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr id="h_stock_add0">
                                    <td>
                                        <select name="h_stock_name[]" id="h_stock_name" onchange="get_h_list(this.value,'0');" class="form-control">
                                            <option value="" >Select</option>
											<?php if(isset($handle_list) && count($handle_list)>0){ ?>
											<?php foreach($handle_list as $lis){ ?>
													<option value="<?php echo $lis['h_s_id']; ?>" ><?php echo $lis['stock_name']; ?></option>
											<?php } ?>
											<?php } ?>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="h_s_type[]" id="h_s_type" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_m_type[]" id="h_m_type" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_size[]" id="h_size" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="h_color[]" id="h_color" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                         <select name="h_gsm[]" id="h_gsm" class="form-control">
                                            <option value="" >Select</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="h_qty[]" id="h_qty" placeholder="Enter Quantity" class="form-control" />
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-md" id="addRow2">Add Row</button>
                    </div>
                </div>
            </div>
            <ul class="list-inline pull-right">
                <li>
                    <a class="btn btn-default prev-step">Previous</a>
                </li>
                <li>
                    <a class="btn btn-primary next-step">Next</a>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="stepper-step-3">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 text-aqua">Sidepatty Section</h4>
                </div>
                <!-- col -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="" class="table table-list-3">
                            <thead>
                                <tr>
                                    <th>Stock Name</th>
                                    <th>Type</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>GSM</th>
                                    <th>Printing</th>
                                    <th>Printing Color</th>
                                    <th>Quantity</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="ssname" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="stype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="ssize" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="scolor" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="sgsm" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="sprinting" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="sprintcolor" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="squantity" placeholder="Enter Quantity" class="form-control" />
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-md" id="addRow3">Add Row</button>
                    </div>
                </div>
            </div>
            <ul class="list-inline pull-right">
                <li>
                    <a class="btn btn-default prev-step">Previous</a>
                </li>
                <li>
                    <a class="btn btn-primary next-step">Next</a>
                </li>
            </ul>
        </div>
        <div class="tab-pane fade" role="tabpanel" id="stepper-step-4">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="mt-0 text-aqua">Bag Section</h4>
                </div>
                <!-- col -->
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table id="" class="table table-list-4">
                            <thead>
                                <tr>
                                    <th>Stock Name</th>
                                    <th>Material Type</th>
                                    <th>Quality</th>
                                    <th>Type</th>
                                    <th>Layout</th>
                                    <th>Size</th>
                                    <th>Color</th>
                                    <th>GSM</th>
                                    <th>Quantity</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <select name="bsname" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bmtype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bquality" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="btype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="blayout" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bsize" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bcolor" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="bgsm" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="bquantity" placeholder="Enter Quantity" class="form-control" />
                                    </td>
                                    <td>&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>
                        <button type="button" class="btn btn-md" id="addRow4">Add Row</button>
                    </div>
                </div>
            </div>
            <ul class="list-inline pull-right">
                <li>
                    <a class="btn btn-default prev-step">Previous</a>
                </li>
                <li>
                    <button type="submit" name="sub_order" class="btn btn-primary next-step">Submit Order</button>
                </li>
            </ul>
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
    
    <!-- Material Section -->
    <script>
        $(document).ready(function() {
            var counter = 1;

            $("#addRow0").on("click", function() {
                var newRow = $('<tr id="stock_name_append'+counter+'">');
                var cols = "";

                cols += '<td><select name="v_id[]" id="v_id' + counter + '" onchange="get_allflags_di(this.value,'+counter+')" class="form-control"><option value="" >Select</option><?php if(isset($vendor_list) && count($vendor_list)>0){ ?><?php foreach($vendor_list as $lis){ ?><option value="<?php echo $lis['v_id']; ?>" ><?php echo $lis['v_name']; ?></option><?php } ?><?php } ?></select></td>';

                
                cols += '<td><select name="s_name[]" id="s_name' + counter + '" class="form-control"><option value="" >Select</option></select></td>';

                cols += '<td><select name="s_size[]" id="s_size' + counter + '" class="form-control"> <option value="" >Select</option> </select></td>';

                cols += '<td><select name="s_thickness[]" id="s_thickness' + counter + '" class="form-control"> <option value="" >Select</option></select></td>';

                cols += '<td><select name="s_color[]" id="s_color' + counter + '" class="form-control"><option value="" >Select</option></select></td>';
                
                cols += '<td><input type="text" name="pieces[]" id="pieces' + counter + '"  placeholder="Enter Pieces" class="form-control" /></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-0").append(newRow);
                counter++;
            });

            $("table.table-list-0").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
    
    <!-- Zip Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow1").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="zsname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="ztype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="zsize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="zcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="zquality' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="zquantity' + counter + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-1").append(newRow);
                counter++;
            });

            $("table.table-list-1").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
    
    <!-- Handle Section -->
    <script>
        $(document).ready(function() {
            var counter = 1;

            $("#addRow2").on("click", function() {
                var newRow = $('<tr id="h_stock_add'+counter+'">');
                var cols = "";

                cols += '<td><select name="h_stock_name[]" id="h_stock_name' + counter + '" onchange="get_h_list_di(this.value,'+counter+')" class="form-control"><option value="" >Select</option><?php if(isset($handle_list) && count($handle_list)>0){ ?><?php foreach($handle_list as $lis){ ?><option value="<?php echo $lis['h_s_id']; ?>"><?php echo $lis['stock_name']; ?></option><?php } ?><?php } ?></select></td>';
                
                cols += '<td><select name="h_s_type[]" id="h_s_type' + counter + '" class="form-control"><option value="" >Select</option></select></td>';
                
                cols += '<td><select name="h_m_type[]" id="h_m_type' + counter + '" class="form-control"> <option value="" >Select</option> </select></td>';
                
                cols += '<td><select name="h_size[]" id="h_size' + counter + '" class="form-control"> <option value="" >Select</option></select></td>';
                
                cols += '<td><select name="h_color[]" id="h_color' + counter + '" class="form-control"><option value="" >Select</option></select></td>';
                
                cols += '<td><select name="h_gsm[]" id="h_gsm' + counter + '" class="form-control"><option value="" >Select</option></select></td>';

                cols += '<td><input type="text" name="h_qty[]" id="h_qty' + counter + '"  placeholder="Enter Quantity" class="form-control" /></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-2").append(newRow);
                counter++;
            });

            $("table.table-list-2").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
    
    <!-- Sidepatty Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow3").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="ssname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="stype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="ssize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="scolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="sgsm' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="sprinting' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="sprintcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="squantity' + counter + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-3").append(newRow);
                counter++;
            });

            $("table.table-list-3").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
    </script>
    
    <!-- Bag Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow4").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="bsname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="bmtype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="bquality' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="btype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="blayout' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="bsize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="bcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="bgsm' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="bquantity' + counter + '"/></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list-4").append(newRow);
                counter++;
            });

            $("table.table-list-4").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
		
		function get_allflags(id,tab){
		 $.ajax({
            url:'<?php echo base_url('inventory/get_vendor_data'); ?>',
            type:'post',
            data:{'v_id':id},
            success:function(data){
				$("#stock_name_append"+tab).empty();
				$("#stock_name_append"+tab).append(data);
            }
          })
	}
	function get_allflags_di(id,tab){
		 $.ajax({
            url:'<?php echo base_url('inventory/get_vendor_data'); ?>',
            type:'post',
            data:{'v_id':id},
            success:function(data){
				$("#stock_name_append"+tab).empty();
				$("#stock_name_append"+tab).append(data);
            }
          })
	}
		  // handle list
		  function get_h_list(id,tab){
			$.ajax({
            url:'<?php echo base_url('inventory/get_handle_data'); ?>',
            type:'post',
            data:{'h_s_id':id},
            success:function(data){
				$("#h_stock_add"+tab).empty();
				$("#h_stock_add"+tab).append(data);
            }
          })
		}
		function get_h_list_di(id,tab){
			$.ajax({
            url:'<?php echo base_url('inventory/get_handle_data'); ?>',
            type:'post',
            data:{'h_s_id':id,'tab_id':tab},
            success:function(data){
				$("#h_stock_add"+tab).empty();
				$("#h_stock_add"+tab).append(data);
            }
          })
		}
    </script>
</body>

</html>