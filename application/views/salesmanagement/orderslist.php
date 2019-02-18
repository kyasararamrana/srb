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
                                            <th>Order ID</th>
                                            <th>Customer Name</th>
                                            <th>Bag Type</th>
                                            <th>Bag Size</th>
                                            <th>GSM</th>
                                            <th>Quantity</th>
                                            <th>Cost</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>SRB00000012</td>
                                            <td>customer2</td>
                                            <td>D-cut</td>
                                            <td>11x60</td>
                                            <td>70</td>
                                            <td>250</td>
                                            <td>4,000.00</td>
                                            <td>29-01-2019 10:33:13</td>
                                            <td>
                                                <a href="<?php echo base_url('salesmanagement/orderdetails'); ?>" type="button" class="btn btn-primary btn-sm mr-5"><i class="fa fa-eye"></i></a>
                                                <a href="<?php echo base_url('salesmanagement/editorderdetails'); ?>" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-edit"></i></a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
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