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
                    Add Stock
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stocks</li>
                    <li class="active">Add Stock</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="add_stocks" name="add_stocks" action="<?php echo base_url('inventory/stcockaddpost'); ?>" method="post">
                                <div class="box-body">
                                    <div class="col-md-12">

                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-list">
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
                                                    <tr>
                                                        <td class="form-group">
                                                            <select name="v_id[]" id="v_id" class="form-control">
                                                                <option value="">Select</option>
																<?php if(isset($v_list) && count($v_list)>0){ ?>
																	<?php foreach($v_list as $lis){ ?>
																		<option value="<?php echo $lis['v_id']; ?>"><?php echo $lis['v_name']; ?></option>
																	<?php } ?>
																<?php } ?>
                                                            </select>
                                                        </td>
                                                       
                                                        <td class="form-group">
                                                            <input type="text" name="st_name[]" id="st_name" placeholder="Name" class="form-control"/>
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="st_size[]" id="st_size" placeholder="Enter Size" class="form-control"/>
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="st_thickness[]" id="st_thickness" placeholder="Enter Thickness" class="form-control" />
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="st_color[]" id="st_color" placeholder="Enter Color" class="form-control" />
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="st_pieces[]" id="st_pieces" placeholder="Enter Pieces" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <button type="button" class="btn btn-md" id="addRow">Add Row</button>
                                        </div>
                                        <hr class="mb-10">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-success">Add</button>
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

    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><select class="form-control" name="v_id[]" id="vendor' + counter + '" required><option value="" >Select</option><?php if(isset($v_list) && count($v_list)>0){ ?><?php foreach($v_list as $lis){ ?><option value="<?php echo $lis['v_id']; ?>"><?php echo $lis['v_name']; ?></option><?php } ?><?php } ?></select></td>';

                
                cols += '<td><input type="text" class="form-control" placeholder="Name" name="st_name[]" id="sname' + counter + '" required="true"></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Size" name="st_size[]" id="size' + counter + '" required="true"></td>';

                cols += '<td><input type="email" class="form-control" placeholder="Enter Thickness" name="st_thickness[]" id="thickness' + counter + '" required></td>';

                cols += '<td><input type="text" class="form-control" placeholder="Enter Color" name="st_color[]" id="color' + counter + '"  required></td>';
                
                cols += '<td><input type="text" class="form-control" placeholder="Enter Pieces" name="st_pieces[]" id="pieces' + counter + '" required></td>';

                cols += '<td><button type="button" class="ibtnDel btn btn-md btn-danger"><i class="fa fa-trash"></i></button></td>';
                newRow.append(cols);
                $("table.table-list").append(newRow);
                counter++;
            });

            $("table.table-list").on("click", ".ibtnDel", function(event) {
                $(this).closest("tr").remove();
                counter -= 1
            });
        });
		
    </script>
	  <script type="text/javascript">
        $(document).ready(function() {
            $('#add_stocks').bootstrapValidator({
                fields: {
                    'v_id[]': {
                        validators: {
							notEmpty: {
								message: 'Vendor is required'
							}
						}
                    },
                    'st_name[]': {
                         validators: {
								notEmpty: {
									message: 'Stock Name is required'
								}
							
							}
                    }, 'st_thickness[]': {
                         validators: {
								notEmpty: {
									message: 'Thickness is required'
								}
							
							}
                    }, 'st_color[]': {
                         validators: {
								notEmpty: {
									message: 'Color is required'
								}
							
							}
                    },'st_pieces[]': {
                         validators: {
								notEmpty: {
									message: 'Pieces is required'
								}
							
							}
                    },
					'st_size[]': {
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