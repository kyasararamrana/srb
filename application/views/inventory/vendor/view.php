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
                    Vendor Info
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li>Vendors</li>
                    <li><a href="<?php echo base_url('vendor/lists'); ?>">Vendor List</a></li>
                    <li class="active">Vendor Info</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <div class="row">

                    <div class="col-md-12">
                        <div class="box box-success">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4 class="text-aqua">Vendor Details</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Vendor Name</b></td>
                                                <td><?php echo isset($v_details['v_name'])?$v_details['v_name']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Primary Mobile Number</b></td>
                                                <td><?php echo isset($v_details['v_p_mobile'])?$v_details['v_p_mobile']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Secondary Mobile Number</b></td>
                                                <td><?php echo isset($v_details['v_s_mobile'])?$v_details['v_s_mobile']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Primary Email ID</b></td>
                                                <td><?php echo isset($v_details['v_p_email'])?$v_details['v_p_email']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Secondary Email Id</b></td>
                                                <td><?php echo isset($v_details['v_s_email'])?$v_details['v_s_email']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Landline Number</b></td>
                                                <td><?php echo isset($v_details['v_landline_no'])?$v_details['v_landline_no']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Fax Number</b></td>
                                                <td><?php echo isset($v_details['v_fax_no'])?$v_details['v_fax_no']:''; ?></td>
                                            </tr>
                                        </table>

                                        <h4 class="text-aqua">Additional Details</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Aadhar Number</b></td>
                                                <td><?php echo isset($v_details['v_aadhar_no'])?$v_details['v_aadhar_no']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>GST Number</b></td>
                                                <td><?php echo isset($v_details['v_gst_no'])?$v_details['v_gst_no']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Others</b></td>
                                                <td><?php echo isset($v_details['v_others'])?$v_details['v_others']:''; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h4 class="text-aqua">Address Details
                                            <a href="<?php echo base_url('vendor/lists'); ?>" class="btn btn-info btn-xs pull-right"><i class="fa fa-arrow-left mr-5"></i>Back</a>
                                        </h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Address</b></td>
                                                <td><?php echo isset($v_details['v_address'])?$v_details['v_address']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>City</b></td>
                                                <td><?php echo isset($v_details['v_city'])?$v_details['v_city']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>District</b></td>
                                                <td><?php echo isset($v_details['v_district'])?$v_details['v_district']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>State</b></td>
                                                <td><?php echo isset($v_details['v_state'])?$v_details['v_state']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Zip Code</b></td>
                                                <td><?php echo isset($v_details['v_zipcode'])?$v_details['v_zipcode']:''; ?></td>
                                            </tr>
                                        </table>

                                        <h4 class="text-aqua">Bank Details</h4>
                                        <table class="table table-bordered">
                                            <tr>
                                                <td><b>Account Number</b></td>
                                                <td><?php echo isset($v_details['v_bank_acc_no'])?$v_details['v_bank_acc_no']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>Account Holder Name</b></td>
                                                <td><?php echo isset($v_details['v_bank_hold_name'])?$v_details['v_bank_hold_name']:''; ?></td>
                                            </tr>
                                            <tr>
                                                <td><b>IFSC Code</b></td>
                                                <td><?php echo isset($v_details['v_ifsc_code'])?$v_details['v_ifsc_code']:''; ?></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
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

</body>

</html>