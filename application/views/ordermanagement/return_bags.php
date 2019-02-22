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
                    Add Return Bags
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Return Bags</li>
                    <li class="active">Add Return Bags</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="workForm" name="workForm" action="">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Order ID</label>
                                            <input type="text" class="form-control" name="orderid" id="" placeholder="Enter Order ID">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bag Type</label>
                                            <select class="form-control" name="btype" id="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bag Size</label>
                                            <select class="form-control" name="bsize" id="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GSM</label>
                                            <select class="form-control" name="bgsm" id="">
                                                <option value="" selected disabled>Select</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Ordered Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="" placeholder="No.of Bags ordered">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Returned Quantity</label>
                                            <input type="text" class="form-control" name="quantity" id="" placeholder="No.of Bags returned">
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Add</button>
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

    <script>
        //Date picker
        $(function () {
            $('#datepicker').datepicker({
              autoclose: true
            });
            $('#datepicker1').datepicker({
              autoclose: true
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#workForm').bootstrapValidator({
                fields: {
                    btype: {
                        validators: {
                            notEmpty: {
                                message: 'Bag Type is required'
                            }
                        }
                    },
                    mname: {
                        validators: {
                            notEmpty: {
                                message: 'Machine Name is required'
                            }
                        }
                    }
                }
            })
        });
    </script>

</body>

</html>