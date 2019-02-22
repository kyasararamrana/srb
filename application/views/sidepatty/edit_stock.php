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
                    Edit Stock Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stocks</li>
                    <li><a href="<?php echo base_url('inventory/stocklist'); ?>">Stock List</a></li>
                    <li class="active">Edit Stock Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Stock Name</label>
                                            <select name="sname" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select name="type" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <select name="size" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <select name="color" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <select name="gsm" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Printing</label>
                                            <select name="gsm" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Printing Color</label>
                                            <select name="gsm" class="form-control">
                                                <option value="0" disabled>Select</option>
                                                <option value="1" selected>Option name</option>
                                                <option value="2">Option name</option>
                                                <option value="3">Option name</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="" value="Quantity">
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('sidepattymodule/stocklist'); ?>" class="btn btn-info pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
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

    <script>
        //Date picker
        $(function () {
            $('#datepicker').datepicker({
              autoclose: true
            });
            $('#datepicker1').datepicker({
              autoclose: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#addVendorForm').bootstrapValidator({
                fields: {
                    vname: {
                        validators: {
                            notEmpty: {
                                message: 'Name is required'
                            }
                        }
                    },
                    vnumber1: {
                        validators: {
                            notEmpty: {
                                message: 'Number is required'
                            }
                        }
                    }
                }
            })
        });
    </script>

</body>

</html>