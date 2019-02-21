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
                    Edit Vendor Details
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Vendors</li>
                    <li><a href="<?php echo base_url('inventory/vendorlist'); ?>">Vendors List</a></li>
                    <li class="active">Edit Vendor Details</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="addVendorForm" name="addVendorForm" action="">
                                <div class="box-body">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Vendor Name</label>
                                            <input type="text" class="form-control" name="vname" id="" value="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Primary Mobile Number</label>
                                            <input type="text" class="form-control" name="vnumber1" id="" value="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Secondary Mobile Number</label>
                                            <input type="text" class="form-control" name="vnumber2" id="" value="Mobile Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Landline Number</label>
                                            <input type="text" class="form-control" name="vlandline" id="" value="Landline Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Fax No</label>
                                            <input type="text" class="form-control" name="vfaxno" id="" value="Fax Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Primary Email Id</label>
                                            <input type="text" class="form-control" name="vemail1" id="" value="Mail Id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Secondary Email Id</label>
                                            <input type="text" class="form-control" name="vemail2" id="" value="Enter Mail Id">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" id="" value="Address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="form-control" name="vcity" id="" value="City">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>District</label>
                                            <select class="form-control" name="vdistrict" id="">
                                                <option value="" disabled>Select</option>
                                                <option value="" selected>Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" name="vstate" id="">
                                                <option value="" disabled>Select</option>
                                                <option value="" selected>Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Zipcode</label>
                                            <input type="text" class="form-control" name="vzipcode" id="" value="Zip Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Account Number</label>
                                            <input type="text" class="form-control" name="vaccountno" id="" value="Bank Account Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Bank Account Holder Name</label>
                                            <input type="text" class="form-control" name="vaccountname" id="" value="Bank Account Holder Name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>IFSC Code</label>
                                            <input type="text" class="form-control" name="vifsc" id="" value="IFSC Code">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Aadhar Number</label>
                                            <input type="text" class="form-control" name="vaadhar" id="" value="Aadhar Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>GST Number</label>
                                            <input type="text" class="form-control" name="vgstno" id="" value="GST Number">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Others</label>
                                            <input type="text" class="form-control" name="vothers" id="" value="here..">
                                        </div>
                                    </div>
                                    <div class="clearfix">&nbsp;</div>
                                    <div class="col-md-6">
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="<?php echo base_url('inventory/vendorlist'); ?>" class="btn btn-info pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
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
            $('#addVendorForm').bootstrapValidator({
                fields: {
                    vname: {
                        validators: {
                            notEmpty: {
                                message: 'Name is required'
                            }
                        }
                    },
                    vnumber1: {
                        validators: {
                            notEmpty: {
                                message: 'Number is required'
                            }
                        }
                    }
                }
            })
        });
    </script>

</body>

</html>