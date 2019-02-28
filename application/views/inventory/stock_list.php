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
                    Stock List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Stocks</li>
                    <li class="active">Stock List</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <table id="example" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Vendor Name</th>
                                            <th>Stock Name</th>
                                            <th>Size</th>
                                            <th>Thickness</th>
                                            <th>Color</th>
                                            <th>Pieces</th>
                                            <th>Date & Time</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
								<?php if(isset($s_list) && count($s_list)>0){ ?>
									<?php $cnt=1;foreach($s_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo isset($lis->v_name)?$lis->v_name:''; ?></td>
                                            <td><?php echo isset($lis->st_name)?$lis->st_name:''; ?></td>
                                            <td><?php echo isset($lis->st_size)?$lis->st_size:''; ?></td>
                                            <td><?php echo isset($lis->st_thickness)?$lis->st_thickness:''; ?></td>
                                            <td><?php echo isset($lis->st_color)?$lis->st_color:''; ?></td>
                                            <td><?php echo isset($lis->st_pieces)?$lis->st_pieces:''; ?></td>
                                            <td><?php echo isset($lis->st_created_at)?$lis->st_created_at:''; ?></td>
                                              <td>
                                                <a href="<?php echo base_url('inventory/editstock/'.base64_encode($lis->st_o_id)); ?>" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('inventory/deletestock/'.base64_encode($lis->st_o_id)); ?>" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
									<?php $cnt++;} ?>
									<?php } ?>
                                    </tbody>
                                </table>
                            </div>
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

    <script type="text/javascript">
        //confirm message
        $(document).ready(function() {
            $('.confirmation').on('click', function() {
                return confirm('Are you sure of deleting stock?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable( {
				"order": [[ 7, "desc" ]]
			} );
        });
    </script>

</body>

</html>