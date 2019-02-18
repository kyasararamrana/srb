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
                    Edit Order Deatils
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li><a href="#">Order List</a></li>
                    <li class="active">Edit Order Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form method="post" id="editOrderForm" action="">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Order Info</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Order ID</label>
                                                <input type="text" class="form-control" name="orderid" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <input type="text" class="form-control" name="cname" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Phone Number</label>
                                                <input type="text" class="form-control" name="mobile" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quantity</label>
                                                <input type="text" class="form-control" name="quantity" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Cost</label>
                                                <input type="text" class="form-control" name="cost" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Date</label>
                                                <input type="text" class="form-control" name="orderdate" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Bag Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Material Type</label>
                                                <input type="text" class="form-control" name="mtype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <input type="text" class="form-control" name="quality" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Type</label>
                                                <input type="text" class="form-control" name="btype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Layout</label>
                                                <input type="text" class="form-control" name="layout" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Size</label>
                                                <input type="text" class="form-control" name="bsize" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag Color</label>
                                                <input type="text" class="form-control" name="bcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Bag GSM</label>
                                                <input type="text" class="form-control" name="bgsm" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Handle Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Type</label>
                                                <input type="text" class="form-control" name="handletype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Material Type</label>
                                                <input type="text" class="form-control" name="handlematerialtype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Size</label>
                                                <input type="text" class="form-control" name="handlesize" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle Color</label>
                                                <input type="text" class="form-control" name="handlecolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Handle GSM</label>
                                                <input type="text" class="form-control" name="handlegsm" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Sidepatty Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Type</label>
                                                <input type="text" class="form-control" name="sidepattytype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Size</label>
                                                <input type="text" class="form-control" name="sidepattysize" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Color</label>
                                                <input type="text" class="form-control" name="sidepattycolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty GSM</label>
                                                <input type="text" class="form-control" name="sidepattygsm" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing</label>
                                                <input type="text" class="form-control" name="sidepattyprint" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Sidepatty Printing Color</label>
                                                <input type="text" class="form-control" name="sidepattyprintcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Zip Section</h4>
                                        </div>
                                        <!-- col -->
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Type</label>
                                                <input type="text" class="form-control" name="ziptype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Color</label>
                                                <input type="text" class="form-control" name="zipcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Size</label>
                                                <input type="text" class="form-control" name="zipsize" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Zip Quality</label>
                                                <input type="text" class="form-control" name="zipquality" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Stitching Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Type</label>
                                                <input type="text" class="form-control" name="stitchtype" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Thread Color</label>
                                                <input type="text" class="form-control" name="stitchcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Stitching Design</label>
                                                <input type="text" class="form-control" name="stitchdesign" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Printing Section</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Method</label>
                                                <input type="text" class="form-control" name="printmethod" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Color Type</label>
                                                <input type="text" class="form-control" name="printcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Style</label>
                                                <input type="text" class="form-control" name="printstyle" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Suggested Printing color</label>
                                                <input type="text" class="form-control" name="sugprintcolor" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Language</label>
                                                <input type="text" class="form-control" name="lang" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Charges</h4>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Other Charges</label>
                                                <input type="text" class="form-control" name="othercharge" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Printing Cost</label>
                                                <input type="text" class="form-control" name="printcost" id="" value="xxxxx">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Block Charges</label>
                                                <input type="text" class="form-control" name="blockcharge" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <h4 class="mt-0 text-aqua">Cost Details</h4>
                                        </div>
                                        <div class="col-md-4">
                                             <div class="form-group">
                                                <label>Cost per Kg</label>
                                                <input type="text" class="form-control" name="bagcost" id="" value="xxxxx">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
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

    <script type="text/javascript">
        $(document).ready(function() {
            $('#editOrderForm').bootstrapValidator({
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: 'Bag Name is required'
                            }
                        }
                    }
                }
            });
        });
    </script>

</body>

</html>