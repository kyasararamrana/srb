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
                    Confirm Orders
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Confirmation Orders</li>
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
                                            <th>Order ID</th>
                                            <th>Name</th>
                                            <th>Mobile Number</th>
                                            <th>Bag Type</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SRB00000012</td>
                                            <td>Kasi</td>
                                            <td>98xxxxxx20</td>
                                            <td>D-cut</td>
                                            <td>4,000</td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url('ordermanagement/orderdetails'); ?>"><i class="fa fa-eye"></i>View</a>
                                                        </li>
                                                        <li>
                                                            <a href=""><i class="fa fa-check"></i>Accept</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-close"></i>Reject</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRB00000012</td>
                                            <td>Mahesh</td>
                                            <td>98xxxxxx20</td>
                                            <td>D-cut</td>
                                            <td>4,000</td>
                                            <td class="valigntop">
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-info" type="button" data-toggle="dropdown" aria-expanded="false"> Actions
                                                        <i class="fa fa-angle-down"></i>
                                                    </button>
                                                    <ul class="dropdown-menu" role="menu">
                                                        <li>
                                                            <a href="<?php echo base_url('ordermanagement/orderdetails'); ?>"><i class="fa fa-eye"></i>View</a>
                                                        </li>
                                                        <li>
                                                            <a href=""><i class="fa fa-check"></i>Accept</a>
                                                        </li>
                                                        <li>
                                                            <a href="#"><i class="fa fa-close"></i>Reject</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
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