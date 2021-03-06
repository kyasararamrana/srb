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
                                <li class="<?php if(isset($tab) && $tab==''){ echo "active"; } ?>">
                                    <a href="#tab_1" data-toggle="tab" aria-expanded="false">Add Printings Type</a>
                                </li>
                                <li class="<?php if(isset($tab) && $tab==1){ echo "active"; } ?>">
                                    <a href="#tab_2" data-toggle="tab" aria-expanded="false">Printings Type List</a>
                                </li>
                                <li class="<?php if(isset($tab) && $tab==2){ echo "active"; } ?>">
                                    <a href="#tab_3" data-toggle="tab" aria-expanded="false">Add Printing Color</a>
                                </li>
                                <li class="<?php if(isset($tab) && $tab==3){ echo "active"; } ?>">
                                    <a href="#tab_4" data-toggle="tab" aria-expanded="false">Printing Color List</a>
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
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                  <td class="form-group">
																	<input type="text" name="p_type[]" id="p_color" placeholder="Enter Printing Type" class="form-control" />
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

                                <div class="tab-pane <?php if(isset($tab) && $tab==1){ echo "active"; } ?>" id="tab_2">
                                    <div class="table-responsive">
                                        <table id="example1" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Printing Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
											<?php if(isset($p_type_list) && count($p_type_list)>0){ ?>
											<?php $cnt=1;foreach($p_type_list as $lis){ ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo isset($lis->p_type)?$lis->p_type:''; ?> </td>
                                                    <td>
                                                        <a href="<?php echo base_url('sidepattymodule/editprint/'.base64_encode($lis->s_p_id)); ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <a href="<?php echo base_url('sidepattymodule/deleteprint/'.base64_encode($lis->s_p_id)); ?>" class="btn btn-danger btn-sm confirmation">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
											<?php $cnt++;} ?>
											<?php }else{ ?>
											<div>NO data</div>
											<?php } ?>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                                
                                <div class="tab-pane <?php if(isset($tab) && $tab==2){ echo "active"; } ?>" id="tab_3">
                                    <form id="add_color" name="add_color" action="<?php echo base_url('sidepattymodule/p_coloraddpost'); ?>" method="POST">
                                        <div class="box-body">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table id="" class="table table-list-2">
                                                        <thead>
                                                            <tr>
                                                                <th>Printing Color</th>
                                                                <th>&nbsp;</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
																<input type="text" name="p_color[]" id="p_color" placeholder="Enter Printing Color" class="form-control" />
                                                                </td>
                                                                <td>&nbsp;</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <button type="button" class="btn btn-md" id="addRow2">Add Row</button>
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

                                <div class="tab-pane <?php if(isset($tab) && $tab==3){ echo "active"; } ?>" id="tab_4">
                                    <div class="table-responsive">
                                        <table id="example2" class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>S.No</th>
                                                    <th>Printing Color</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                              <tbody>
											<?php if(isset($p_color_list) && count($p_color_list)>0){ ?>
											<?php $cnt=1;foreach($p_color_list as $lis){ ?>
                                                <tr>
                                                    <td><?php echo $cnt; ?></td>
                                                    <td><?php echo isset($lis->p_color)?$lis->p_color:''; ?> </td>
                                                    <td>
                                                        <a href="<?php echo base_url('sidepattymodule/editcolor/'.base64_encode($lis->s_c_id)); ?>" class="btn btn-info btn-sm">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                        <a href="<?php echo base_url('sidepattymodule/deletep_color/'.base64_encode($lis->s_c_id)); ?>" class="btn btn-danger btn-sm confirmation">
                                                            <i class="fa fa-trash"></i> Delete
                                                        </a>
                                                    </td>
                                                </tr>
											<?php $cnt++;} ?>
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
            $('#example2').DataTable();
        });
    </script>
    
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow3").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" name="p_type[]" id="sprinting' + counter + '" placeholder="Enter Printing Type" class="form-control" /></td>';

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
    
    <script>
        $(document).ready(function() {
            var counter = 0;

            $("#addRow2").on("click", function() {
                var newRow = $("<tr>");
                var cols = "";

                cols += '<td><input type="text" name="p_color[]" id="p_color' + counter + '" placeholder="Enter Printing Color" class="form-control" /></td>';

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

</body>

</html>