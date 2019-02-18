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
                    Orders Status List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Orders Status List</li>
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
                                            <th>Packing Status</th>
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
                                            <td><p class="text-aqua">Packed Completed</p></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>SRB00000012</td>
                                            <td>Mahesh</td>
                                            <td>98xxxxxx20</td>
                                            <td>D-cut</td>
                                            <td>4,000</td>
                                            <td><p class="text-green">Ready for Delivery</p></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>SRB00000012</td>
                                            <td>Uma</td>
                                            <td>98xxxxxx20</td>
                                            <td>D-cut</td>
                                            <td>4,000</td>
                                            <td><p class="text-light-blue">Packed</p></td>
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
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>