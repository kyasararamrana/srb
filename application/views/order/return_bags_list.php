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
                    Return Bags List
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Return Bags</li>
                    <li class="active">Return Bags List</li>
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
                                            <th>Ordered Bags</th>
                                            <th>Returned Bags</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>1230</td>
                                            <td>123</td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-edit"></i></a>
                                                <a href="#" type="button" class="btn btn-danger btn-sm mr-5 confirmation"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>xxxxx</td>
                                            <td>2500</td>
                                            <td>250</td>
                                            <td>
                                                <a href="#" type="button" class="btn btn-info btn-sm mr-5"><i class="fa fa-edit"></i></a>
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
                return confirm('Are you sure of deleting color?');
            });
        });
        //datatables
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

</body>

</html>