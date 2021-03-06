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
                    Sidepatty List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Sidepatty</li>
                    <li class="active">Sidepatty List</li>
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
                                            <th>Sidepatty Type</th>
                                            <th>Sidepatty Size</th>
                                            <th>Sidepatty Color</th>
                                            <th>Sidepatty GSM</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php if(isset($s_list) && count($s_list)>0){ ?>
									<?php $cnt=1;foreach($s_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo isset($lis->s_type)?$lis->s_type:''; ?></td>
                                            <td><?php echo isset($lis->s_size)?$lis->s_size:''; ?></td>
                                            <td><?php echo isset($lis->s_color)?$lis->s_color:''; ?></td>
                                            <td><?php echo isset($lis->s_gsm)?$lis->s_gsm:''; ?></td>
                                            <td><?php echo isset($lis->s_qty)?$lis->s_qty:''; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('sidepattymodule/editsidepatty/'.base64_encode($lis->s_id)); ?>" type="button" class="btn btn-info mr-10 mb-5"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('sidepattymodule/deletesidepatty/'.base64_encode($lis->s_id)); ?>" type="button" class="btn btn-danger mr-10 mb-5 confirmation"><i class="fa fa-trash-o"></i></a>
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
            $('#example').DataTable();
        });
    </script>

</body>

</html>