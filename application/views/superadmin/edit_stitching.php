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
                    Edit Stitching Type
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Edit Stitching Type</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('stitching/update'); ?>" method="post">
							<input type="hidden" name="i_s_t_id" id="i_s_t_id" value="<?php echo isset($s_details['i_s_t_id'])?$s_details['i_s_t_id']:''; ?>">
                                <div class="box-body">
                                    <div class="col-md-12">
									 <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Stitching Type</label>
                                                   <input type="text" name="stitching_type" value="<?php echo isset($s_details['stitching_type'])?$s_details['stitching_type']:''; ?>" placeholder="Enter Stitching Type" class="form-control" required>

                                              </div>
                                          </div>
                                      </div>
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
