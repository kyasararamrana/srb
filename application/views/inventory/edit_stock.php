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
                            <form id="edit_stocks" name="edit_stocks" action="<?php echo base_url('inventory/editstock_post'); ?>" method="post">
                                <input type="hidden" name="st_o_id" id="st_o_id" value="<?php echo isset($s_detail['st_o_id'])?$s_detail['st_o_id']:''; ?>">
								<div class="box-body">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Stock Name</label>
												<input type="text" class="form-control" name="st_name" id="st_name" value="<?php echo isset($s_detail['st_name'])?$s_detail['st_name']:''; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Size</label>
												<input type="text" class="form-control" name="st_size" id="st_size" value="<?php echo isset($s_detail['st_size'])?$s_detail['st_size']:''; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Thickness</label>
												<input type="text" class="form-control" name="st_thickness" id="st_thickness" value="<?php echo isset($s_detail['st_thickness'])?$s_detail['st_thickness']:''; ?>">
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label>Color</label>
												<input type="text" class="form-control" name="st_color" id="st_color" value="<?php echo isset($s_detail['st_color'])?$s_detail['st_color']:''; ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label>Pieces</label>
												<input type="text" class="form-control" name="st_pieces" id="st_pieces" value="<?php echo isset($s_detail['st_pieces'])?$s_detail['st_pieces']:''; ?>">
											</div>
										</div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('inventory/stocklist'); ?>" class="btn btn-info pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
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
            $('#edit_stocks').bootstrapValidator({
                fields: {
                    
                    st_name: {
                         validators: {
								notEmpty: {
									message: 'Stock Name is required'
								}
							
							}
                    }, st_thickness: {
                         validators: {
								notEmpty: {
									message: 'Thickness is required'
								}
							
							}
                    }, st_color: {
                         validators: {
								notEmpty: {
									message: 'Color is required'
								}
							
							}
                    },st_pieces: {
                         validators: {
								notEmpty: {
									message: 'Pieces is required'
								}
							
							}
                    },
					st_size: {
						validators: {
							notEmpty: {
								message: 'Size is required'
							}
						}
                    }
                }
            })
        });
    </script>

</body>

</html>