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
                    Edit Sidepatty Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Sidepatty</li>
                    <li><a href="<?php echo base_url('sidepattymodule/sidepattylist'); ?>">Sidepatty List</a></li>
                    <li class="active">Edit Sidepatty Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="edit_sidepatty" name="edit_sidepatty" action="<?php echo base_url('sidepattymodule/editpost'); ?>" method="POST">
							    <input type="hidden"  name="s_id" id="s_id" value="<?php echo isset($s_details['s_id'])?$s_details['s_id']:''; ?>">

                                <div class="box-body">
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <input type="text" name="s_type" id="s_type" value="<?php echo isset($s_details['s_type'])?$s_details['s_type']:''; ?>" placeholder="Enter Type" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <input type="text" name="s_size" id="s_size" value="<?php echo isset($s_details['s_size'])?$s_details['s_size']:''; ?>" placeholder="Enter Size" class="form-control" />
                                        </div>
                                    </div>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <input type="text" name="s_color" id="s_color" value="<?php echo isset($s_details['s_color'])?$s_details['s_color']:''; ?>" placeholder="Enter Color" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <input type="text" name="s_gsm" id="s_gsm" value="<?php echo isset($s_details['s_gsm'])?$s_details['s_gsm']:''; ?>" placeholder="Enter GSM" class="form-control" />
                                        </div>
                                    </div>
								</div>
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                           <input type="text" name="s_qty" id="s_qty" value="<?php echo isset($s_details['s_qty'])?$s_details['s_qty']:''; ?>" placeholder="Enter Quantity" class="form-control" />
                                        </div>
                                    </div>
								</div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('sidepattymodule/sidepattylist'); ?>" class="btn btn-info pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
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
            $('#edit_sidepatty').bootstrapValidator({
                fields: {
                    s_type: {
                        validators: {
							notEmpty: {
								message: 'Type is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Type can only consist of alphanumeric, space and dot'
							}
						}
                    },
					s_size: {
                        validators: {
							notEmpty: {
								message: 'Size is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9*-_=\/. ]+$/,
							message: 'Size can only consist of alphanumeric, space and dot'
							}
						}
                    },s_color: {
                        validators: {
							notEmpty: {
								message: 'Color is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-8. ]+$/,
							message: 'Color can only consist of alphanumeric, space and dot'
							}
						}
                    },s_gsm: {
                        validators: {
							notEmpty: {
								message: 'GSM is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-8. ]+$/,
							message: 'GSM can only consist of alphanumeric, space and dot'
							}
						}
                    },s_qty: {
                        validators: {
							notEmpty: {
								message: 'Quantity is required'
							},
							regexp: {
							regexp: /^[0-9]+$/,
							message: 'Quantity can only consist of only digits'
							}
						}
                    },
                    v_others: {
						validators: {
							notEmpty: {
								message: 'Others is required'
							},regexp: {
							regexp:/^[ A-Za-z0-9_@.,/!;:}{@#&`~"\\|^?$*)(_+-]*$/,
							message:'Others wont allow <> [] = % '
							}
						}
                    }
                }
            })
        });
    </script>

</body>

</html>