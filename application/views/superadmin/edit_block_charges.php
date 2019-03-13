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
                    Edit Block Charges
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
                    <li class="active">Edit Block Charges</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-success">
                            <!-- form start -->
                            <form id="" name="" action="<?php echo base_url('block/update'); ?>" method="post">
							<input type="hidden" name="i_b_c_id" id="i_b_c_id" value="<?php echo isset($block_details['i_b_c_id'])?$block_details['i_b_c_id']:''; ?>">
                                <div class="box-body">
                                    <div class="col-md-12">
									 <div class="row">
                                          <div class="col-md-6">
                                              <div class="form-group">
                                                  <label>Bag type</label>
                                                  <select name="b_type"  name="b_type" class="form-control" required>
                                                    <option value="">Select</option>
                                                    <?php if (count($bags_list) > 0) { ?>
                                                      <?php foreach ($bags_list as $list) { ?>
													  <?php if($list['id']== $block_details['bage_type']){ ?>
													  <option selected value="<?php echo $list['id']; ?>"><?php echo  $list['bag_type']; ?></option>
														<?php }else{ ?>
															<option value="<?php echo $list['id']; ?>"><?php echo  $list['bag_type']; ?></option>
													  <?php } ?>
                                                        
                                                      <?php } ?>
                                                    <?php } ?>
                                                  </select>
                                              </div>
                                          </div>
                                      </div>
                                        <div class="table-responsive">
                                            <table id="myTable" class="table table-list">
                                                <thead>
                                                    <tr>
                                                        <th>Block Type</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="col-md-6">
                                                            <input type="text" name="block_type" placeholder="Block Type" class="form-control" value="<?php echo isset($block_details['block_type'])?$block_details['block_type']:''; ?>" required>
                                                        </td>
														<td class="col-md-6">
                                                            <input type="text" name="block_amt" placeholder="Block Amount" class="form-control" value="<?php echo isset($block_details['block_amt'])?$block_details['block_amt']:''; ?>" required>
                                                        </td>
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
