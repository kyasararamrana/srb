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
                    Printing
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Printing</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">
                    <div class="col-md-12">
                        <!-- Custom Tabs -->
                        <div class="nav-tabs-custom">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#tab_1" data-toggle="tab" aria-expanded="false">Add Printings</a>
                                </li>
                                <li class="">
                                    <a href="#tab_2" data-toggle="tab" aria-expanded="false">Printings List</a>
                                </li>
                            </ul>
                            <div class="tab-content">

                                <div class="tab-pane <?php if(isset($tab) && $tab==''){ echo "active"; } ?>" id="tab_1">
                                    <form id="add_print" name="add_print" action="<?php echo base_url('sidepattymodule/printaddpost'); ?>" method="POST">
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="" class="table table-list-3">
                                                        <thead>
                                                            <tr>
                                                                <th>Printing Type</th>
                                                                <th>Printing Color</th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                 <td class="form-group">
																	<input type="text" name="p_type[]" id="p_color" placeholder="Enter Printing Type" class="form-control" />
																</td>
                                                                 <td class="form-group">
																	<input type="text" name="p_color[]" id="p_color" placeholder="Enter Printing Color" class="form-control" />
																</td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="btn btn-md" id="addRow3">Add Row</button>
                                                    <hr class="mb-10">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-md btn-success">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->

                                <div class="tab-pane <?php if(isset($tab) && $tab==1){ echo "active"; } ?>" id="tab_2" >
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Printing Type</th>
                                                    <th>Printing Color</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if(isset($p_list) && count($p_list)>0){ ?>
												<?php foreach($p_list as $lis){ ?>
													<tr>
														<td><?php echo isset($lis->p_type)?$lis->p_type:''; ?></td>
														<td><?php echo isset($lis->p_color)?$lis->p_color:''; ?></td>
														<td>
															<a href="<?php echo base_url('sidepattymodule/editprint/'.base64_encode($lis->s_p_id)); ?>" class="btn btn-info btn-sm">
																<i class="fa fa-edit"></i> Edit
															</a>
															<a href="<?php echo base_url('sidepattymodule/deleteprint/'.base64_encode($lis->s_p_id)); ?>" class="btn btn-danger btn-sm confirmation">
																<i class="fa fa-trash"></i> Delete
															</a>
														</td>
													</tr>
												<?php } ?>
											<?php }else{ ?>
											<div>NO data</div>
											<?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- nav-tabs-custom -->
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
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting category?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
    
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow3").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";
				cols += '<td><input type="text" name="p_type[]" id="p_type' + counter + '" placeholder="Enter Printing Type" class="form-control" /></td>';

                cols += '<td><input type="text" name="p_color[]" id="p_color' + counter + '" placeholder="Enter Printing Color" class="form-control" /></td>';

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
	<script type="text/javascript">
        $(document).ready(function() {
            $('#add_print').bootstrapValidator({
                fields: {
                    'p_type[]': {
                        validators: {
							notEmpty: {
								message: 'Type is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9. ]+$/,
							message: 'Type can only consist of alphanumeric, space and dot'
							}
						}
                    },'p_color[]': {
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