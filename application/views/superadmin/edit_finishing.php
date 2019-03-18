<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SRB | <?php echo $pageTitle; ?></title>
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
                    Edit Finishing Size
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Edit Finishing Size</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('finishing/update'); ?>" method="post">
							<input type="hidden" name="i_f_s_id" id="i_f_s_id" value="<?php echo isset($f_details['i_f_s_id'])?$f_details['i_f_s_id']:''; ?>">
                                <div class="box-body">
								<div class="col-md-6">
                                        <div class="form-group">
                                            <label>Size</label>
                                            <select class="form-control" name="s_size" id="s_size" >
                                              <?php if (count($size_list) > 0) { ?>
                                                <option value="">Select</option>
                                                <?php foreach ($size_list as $list) { ?>
													<?php if($list['s_id']== $f_details['s_size']){ ?>
															<option selected value="<?php echo $list['s_id']; ?>" ><?php echo $list['s_size']; ?></option>
													<?php }else{ ?>
															<option value="<?php echo $list['s_id']; ?>" ><?php echo $list['s_size']; ?></option>
													<?php } ?>
                                                  
                                                <?php } ?>
                                              <?php } else { ?>
                                                <option value="">No records found</option>
                                              <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
									
										<div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Finishing Size</th>
                                                        <th>&nbsp;</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-6">
                                                            <input type="text" name="finishing_size" placeholder="Enter Finishing Size" value="<?php echo isset($f_details['finishing_size'])?$f_details['finishing_size']:''; ?>" class="form-control" required>
                                                        </td>
                                                        <td>&nbsp;</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <hr class="mb-10">
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-md btn-success btn-flat">Update</button>
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
