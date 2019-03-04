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
                    Edit Printing Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Printing</li>
                    <li><a href="<?php echo base_url('sidepattymodule/printing'); ?>">Printing List</a></li>
                    <li class="active">Edit Printing Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="edit_print" name="edit_print" action="<?php echo base_url('sidepattymodule/printeditpost'); ?>" method="POST">
							    <input type="hidden"  name="s_id" id="s_id" value="<?php echo isset($p_details['s_p_id'])?$p_details['s_p_id']:''; ?>">

                                <div class="box-body">
								<div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Printing Type</label>
                                            <input type="text" name="p_type" id="p_type" value="<?php echo isset($p_details['p_type'])?$p_details['p_type']:''; ?>" placeholder="Enter Type" class="form-control" />
                                        </div>
                                    </div>
                                   
								</div>
								
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('sidepattymodule/printing/'.base64_encode(1)); ?>" class="btn btn-info pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
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
            $('#edit_print').bootstrapValidator({
                fields: {
                    p_type: {
                        validators: {
							notEmpty: {
								message: 'Type is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Type can only consist of alphanumeric, space and dot'
							}
						}
                    },p_color: {
                        validators: {
							notEmpty: {
								message: 'Color is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-8. ]+$/,
							message: 'Color can only consist of alphanumeric, space and dot'
							}
						}
                    }
                }
            })
        });
    </script>


</body>

</html>