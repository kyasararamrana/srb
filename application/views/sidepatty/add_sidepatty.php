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
                    Add Sidepatty
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Sidepatty</li>
                    <li class="active">Add Sidepatty</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="add_sidepatty" name="add_sidepatty" action="<?php echo base_url('sidepattymodule/addpost'); ?>" method="POST">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="" class="table table-list-3">
                                                <thead>
                                                    <tr>
                                                        <th>Type</th>
                                                        <th>Size</th>
                                                        <th>Color</th>
                                                        <th>GSM</th>
                                                        <th>Quantity</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                         <td class="form-group">
                                                            <input type="text" name="s_type[]" id="s_type" placeholder="Enter Type" class="form-control" />
                                                        </td>
                                                         <td class="form-group">
                                                            <input type="text" name="s_size[]" id="s_size" placeholder="Enter Size" class="form-control" />
                                                        </td>
                                                         <td class="form-group">
                                                            <input type="text" name="s_color[]" id="s_color" placeholder="Enter Color" class="form-control" />
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="s_gsm[]" id="s_gsm" placeholder="Enter GSM" class="form-control" />
                                                        </td>
                                                        <td class="form-group">
                                                            <input type="text" name="s_qty[]" id="s_qty" placeholder="Enter Quantity" class="form-control" />
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

    <!-- Sidepatty Section -->
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow3").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" name="s_type[]" id="s_type' + counter + '" placeholder="Enter Type" class="form-control" /></td>';

                cols += '<td> <input type="text" name="s_size[]" id="s_size' + counter + '" placeholder="Enter Size" class="form-control" /></td>';

                cols += '<td><input type="text" name="s_color[]" id="s_color' + counter + '" placeholder="Enter Color" class="form-control" /></td>';

                cols += '<td><input type="text" name="s_gsm[]" id="s_gsm' + counter + '" placeholder="Enter GSM" class="form-control" /></td>';
                
                cols += '<td><input type="text" name="s_qty[]"  id="s_qty' + counter + '"  placeholder="Enter Quantity" class="form-control"/></td>';

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
            $('#add_sidepatty').bootstrapValidator({
                fields: {
                    's_type[]': {
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
					's_size[]': {
                        validators: {
							notEmpty: {
								message: 'Size is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-9*-_=\/. ]+$/,
							message: 'Size can only consist of alphanumeric, space and dot'
							}
						}
                    },'s_color[]': {
                        validators: {
							notEmpty: {
								message: 'Color is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-8. ]+$/,
							message: 'Color can only consist of alphanumeric, space and dot'
							}
						}
                    },'s_gsm[]': {
                        validators: {
							notEmpty: {
								message: 'GSM is required'
							},
							regexp: {
							regexp: /^[a-zA-Z0-8. ]+$/,
							message: 'GSM can only consist of alphanumeric, space and dot'
							}
						}
                    },'s_qty[]': {
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