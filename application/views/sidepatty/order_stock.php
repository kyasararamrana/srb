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
                    Order Stock
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Order Stock</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="add_order_staock" name="add_order_staock" action="<?php echo base_url('sidepattymodule/addorder_post'); ?>" method="POST">
                                <div class="box-body">
								  <div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Stock Name</label>
												<input type="text" class="form-control" name="o_sname" id="o_sname" placeholder="Stock Name">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Type</label>
												<select name="o_type" id="o_type" class="form-control">
													<option value="">Select</option>
													<?php if(isset($type_list) && count($type_list)>0){ ?>
														<?php foreach($type_list as $lis){ ?>
															<option value="<?php echo $lis['s_type']; ?>"><?php echo $lis['s_type']; ?></option>
														<?php } ?>
													<?php } ?>
												</select>
											</div>
										</div>
									</div>
									<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                           <select name="o_size" id="o_size" class="form-control">
                                                <option value="">Select</option>
												<?php if(isset($size_list) && count($size_list)>0){ ?>
													<?php foreach($size_list as $lis){ ?>
														<option value="<?php echo $lis['s_size']; ?>"><?php echo $lis['s_size']; ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                           <select name="o_color" id="o_color" class="form-control">
                                                <option value="">Select</option>
												<?php if(isset($color_list) && count($color_list)>0){ ?>
													<?php foreach($color_list as $lis){ ?>
														<option value="<?php echo $lis['s_color']; ?>"><?php echo $lis['s_color']; ?></option>
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    </div>
									<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM</label>
												<select name="o_gsm" id="o_gsm" class="form-control">
													<option value="">Select</option>
													<?php if(isset($gsm_list) && count($gsm_list)>0){ ?>
														<?php foreach($gsm_list as $lis){ ?>
															<option value="<?php echo $lis['s_gsm']; ?>"><?php echo $lis['s_gsm']; ?></option>
														<?php } ?>
													<?php } ?>
												</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Printing Type</label>
												<select name="o_p_type" id="o_p_type" class="form-control">
													<option value="">Select</option>
													<?php if(isset($print_type_list) && count($print_type_list)>0){ ?>
														<?php foreach($print_type_list as $lis){ ?>
															<option value="<?php echo $lis['p_type']; ?>"><?php echo $lis['p_type']; ?></option>
														<?php } ?>
													<?php } ?>
												</select>
                                        </div>
                                    </div>
                                    </div>
									<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Printing Color</label>
                                            <select name="o_p_color" id="o_p_color" class="form-control">
													<option value="">Select</option>
													<?php if(isset($print_color_list) && count($print_color_list)>0){ ?>
														<?php foreach($print_color_list as $lis){ ?>
															<option value="<?php echo $lis['p_color']; ?>"><?php echo $lis['p_color']; ?></option>
														<?php } ?>
													<?php } ?>
												</select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control" name="qty" id="qty" placeholder="Quantity">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
            $('#add_order_staock').bootstrapValidator({
                fields: {
                    o_sname: {
                        validators: {
                            notEmpty: {
                                message: 'Stock Name is required'
                            },regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Stock Name can only consist of alphanumeric, space and dot'
							}
                        }
                    },
                    o_type: {
                        validators: {
                            notEmpty: {
                                message: 'Type is required'
                            }
                        }
                    },
                    o_size: {
                        validators: {
                            notEmpty: {
                                message: 'Size is required'
                            }
                        }
                    },
                    o_color: {
                        validators: {
                            notEmpty: {
                                message: 'Color is required'
                            }
                        }
                    },
                    o_gsm: {
                        validators: {
                            notEmpty: {
                                message: 'GSM is required'
                            }
                        }
                    },o_p_type: {
                        validators: {
                            notEmpty: {
                                message: 'Printing Type is required'
                            }
                        }
                    },o_p_color: {
                        validators: {
                            notEmpty: {
                                message: 'Printing Color is required'
                            }
                        }
                    },qty: {
                        validators: {
                            notEmpty: {
                                message: 'Quantity is required'
                            },regexp: {
								regexp:  /^[0-9]+$/,
								message:'Quantity must be digits'
								}
                        }
                    }
                }
            })
        });
    </script>

</body>

</html>