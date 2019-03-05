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
                    Orders List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders List</li>
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
                                            <th>Stock Name</th>
                                            <th>Material Type</th>
                                            <th>Type</th>
                                            <th>Size</th>
                                            <th>Color</th>
                                            <th>GSM</th>
                                            <th>Quantity</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php if(isset($handle_order_list) && count($handle_order_list)>0){ ?>
									<?php $sno=1;foreach($handle_order_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $sno; ?></td>
                                            <td><?php echo isset($lis['stock_name'])?$lis['stock_name']:''; ?></td>
                                            <td><?php echo isset($lis['h_material_type'])?$lis['h_material_type']:''; ?></td>
                                            <td><?php echo isset($lis['h_type'])?$lis['h_type']:''; ?></td>
                                            <td><?php echo isset($lis['h_size'])?$lis['h_size']:''; ?></td>
                                            <td><?php echo isset($lis['h_color'])?$lis['h_color']:''; ?></td>
                                            <td><?php echo isset($lis['h_gsm'])?$lis['h_gsm']:''; ?></td>
                                            <td><?php echo isset($lis['h_quantity'])?$lis['h_quantity']:''; ?></td>
                                            <td><?php if($lis['h_status']==0){ echo "Pending";}else if($lis['h_status']==1){ echo "Accept";}else if($lis['h_status']==2){ echo "reject"; } ?></td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu" style="right:0;left:auto;">
                                                        <li>
                                                            <a href=""><i class="fa fa-check-circle"></i>Accept Order</a>
                                                        </li>
                                                        <li>
                                                            <a href=""><i class="fa fa-close"></i>Reject Order</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
									<?php $sno++;} ?>
									<?php }else{ ?>
									<div>No data</div>
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
                return confirm('Are you sure of deleting category?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>