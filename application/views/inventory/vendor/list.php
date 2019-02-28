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
                    Vendors List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Vendors</li>
                    <li class="active">Vendors List</li>
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
                                            <th>Vendor ID</th>
                                            <th>Vendor Name</th>
                                            <th>Mobile Number</th>
                                            <th>Email</th>
                                            <th>Address</th>
                                            <th>Aadhar Number</th>
                                            <th>GST Number</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php $cnt=1;foreach($vendor_list as $lis){ ?>
                                        <tr>
                                            <td><?php echo $cnt; ?></td>
                                            <td><?php echo isset($lis->v_u_id)?$lis->v_u_id:''; ?></td>
                                            <td><?php echo isset($lis->v_name)?$lis->v_name:''; ?></td>
                                            <td><?php echo isset($lis->v_p_mobile)?$lis->v_p_mobile:''; ?></td>
                                            <td><?php echo isset($lis->v_p_email)?$lis->v_p_email:''; ?></td>
                                            <td><?php echo isset($lis->v_address)?$lis->v_address:''; ?></td>
                                            <td><?php echo isset($lis->v_aadhar_no)?$lis->v_aadhar_no:''; ?></td>
                                            <td><?php echo isset($lis->v_gst_no)?$lis->v_gst_no:''; ?></td>
                                           
                                            <td>
                                                <a href="<?php echo base_url('vendor/view/'.base64_encode($lis->v_id)); ?>" type="button" class="btn btn-primary btn-sm mr-5"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url('vendor/edit/'.base64_encode($lis->v_id)); ?>" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-edit"></i></a>
                                                <a href="<?php echo base_url('vendor/deletes/'.base64_encode($lis->v_id)); ?>" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
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
                return confirm('Are you sure of deleting ?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>