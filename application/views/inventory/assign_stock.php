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
                            <form method="post" id="" action="">
                                <div class="box-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <div class="stepper">
                                                <ul class="nav nav-tabs" role="tablist">
                                                    <li role="presentation" class="active">
                                                        <a class="persistant-disabled" href="#stepper-step-1" data-toggle="tab" aria-controls="stepper-step-1" role="tab" title="Zip Setion">
                                                            <span class="round-tab">1</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-2" data-toggle="tab" aria-controls="stepper-step-2" role="tab" title="Handle Section">
                                                            <span class="round-tab">2</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-3" data-toggle="tab" aria-controls="stepper-step-3" role="tab" title="Sidepatty Section">
                                                            <span class="round-tab">3</span>
                                                        </a>
                                                    </li>
                                                    <li role="presentation" class="disabled">
                                                        <a class="persistant-disabled" href="#stepper-step-4" data-toggle="tab" aria-controls="stepper-step-4" role="tab" title="Bag Section">
                                                            <span class="round-tab">4</span>
                                                        </a>
                                                    </li>
                                                </ul>
<form role="form">
    <div class="tab-content">
        <div class="tab-pane fade in active" role="tabpanel" id="stepper-step-1">
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
                                <tr>
                                    <td>
                                        <select name="hsname" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="htype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hmtype" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hsize" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hcolor" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <select name="hgsm" class="form-control">
                                            <option value="0" selected disabled>Select</option>
                                            <option value="1">Option name</option>
                                            <option value="2">Option name</option>
                                            <option value="3">Option name</option>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="text" name="hquantity" placeholder="Enter Quantity" class="form-control" />
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
                    <a class="btn btn-primary next-step">Submit Order</a>
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
            var counter = 0;

            $("#addRow2").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="hsname' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="htype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="hmtype' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="hsize' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="hcolor' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';
                
                cols += '<td><select class="form-control" name="hgsm' + counter + '"><option value="0" selected disabled>Select</option><option value="1">Option</option><option value="2">Option</option><option value="3">Option</option></select></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Quantity" name="hquantity' + counter + '"/></td>';

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
    </script>
</body>

</html>