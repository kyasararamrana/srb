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
                            <form id="add_stock" name="add_stock" action="<?php echo base_url('handle/addpost'); ?>" method="POST">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Stock Name</label>
                                           <input type="text" name="stock_name" id="stock_name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Material Type</label>
                                            <select name="mtype" id="mtype" class="form-control">
                                                <option value="">Select</option>
												<?php if(isset($material_type) && count($material_type)>0){ ?>
													<?php foreach($material_type as $lis){ ?>
													 <option value="<?php echo $lis['material']; ?>"><?php echo $lis['material']; ?></option>	
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select name="type"  id="type"class="form-control">
                                               <option value="">Select</option>
												<?php if(isset($type_list) && count($type_list)>0){ ?>
													<?php foreach($type_list as $lis){ ?>
													 <option value="<?php echo $lis['type']; ?>"><?php echo $lis['type']; ?></option>	
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <select name="size" id="size" class="form-control">
                                                <option value="">Select</option>
												<?php if(isset($size_list) && count($size_list)>0){ ?>
													<?php foreach($size_list as $lis){ ?>
													 <option value="<?php echo $lis['size']; ?>"><?php echo $lis['size']; ?></option>	
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Color</label>
                                            <select name="color" id="color" class="form-control">
                                                <option value="">Select</option>
												<?php if(isset($color_list) && count($color_list)>0){ ?>
													<?php foreach($color_list as $lis){ ?>
													 <option value="<?php echo $lis['color']; ?>"><?php echo $lis['color']; ?></option>	
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <select name="gsm" id="gsm" class="form-control">
                                               <option value="">Select</option>
												<?php if(isset($gsm_list) && count($gsm_list)>0){ ?>
													<?php foreach($gsm_list as $lis){ ?>
													 <option value="<?php echo $lis['gsm']; ?>"><?php echo $lis['gsm']; ?></option>	
													<?php } ?>
												<?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
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
            $('#add_stock').bootstrapValidator({
                fields: {
                    stock_name: {
                        validators: {
                            notEmpty: {
                                message: 'Stock Name is required'
                            },regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Stock Name can only consist of alphanumeric, space and dot'
							}
                        }
                    },
                    mtype: {
                        validators: {
                            notEmpty: {
                                message: 'Material Type is required'
                            }
                        }
                    },
					type: {
                        validators: {
                            notEmpty: {
                                message: 'Type is required'
                            }
                        }
                    },
                    size: {
                        validators: {
                            notEmpty: {
                                message: 'Size is required'
                            }
                        }
                    },
                    color: {
                        validators: {
                            notEmpty: {
                                message: 'Color is required'
                            }
                        }
                    },
                    gsm: {
                        validators: {
                            notEmpty: {
                                message: 'GSM is required'
                            }
                        }
                    },quantity: {
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