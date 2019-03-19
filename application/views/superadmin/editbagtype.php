<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?> </title>
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
                <h1> Edit Bag Type </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active"> Edit Bag Type </li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('bagtype/update'); ?>" method="post">
							<input type="hidden" name="b_type_id" id="b_type_id" value="<?php echo isset($b_details['id'])?$b_details['id']:''; ?>">
                                <div class="box-body">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Bag Type</th>
                                                        <th>&nbsp;</th>
                                                        <th>Printing Charges</th>
                                                        <th>&nbsp;</th>
                                                        <th>Additional GSM</th>
                                                        <th>&nbsp;</th>
                                                        <th>Percentage</th>
                                                        <th>&nbsp;</th>
                                                        <th>Cost per kg</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-2">
                                                            <input type="text" name="bagtype" value="<?php echo isset($b_details['bag_type'])?$b_details['bag_type']:''; ?>" placeholder="Bag Type" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        
                                                        <td class="col-md-2">
                                                            <input type="text" name="printingcost" value="<?php echo isset($b_details['printing_cost'])?$b_details['printing_cost']:''; ?>" placeholder="Printing Charges" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                     
                                                        <td class="col-md-2">
                                                            <input type="text" name="additionalgsm" value="<?php echo isset($b_details['additional_gsm'])?$b_details['additional_gsm']:''; ?>" placeholder="Additional GSM" class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td class="col-md-1">
                                                            <input type="text" name="percentage" value="<?php echo isset($b_details['percentage'])?$b_details['percentage']:''; ?>" placeholder="Percen.." class="form-control" />
                                                        </td>
                                                        <td>&nbsp;</td>
                                                        <td class="col-md-1">
                                                            <input type="text" name="costperkg" value="<?php echo isset($b_details['cost_per_kg'])?$b_details['cost_per_kg']:''; ?>" placeholder="" class="form-control" />
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr class="mb-10">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-success btn-flat">Submit</button>
                                        </div>
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
    
</body>
</html>
